<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Menampilkan daftar kategori layanan (Eloquent ORM).
     */
    public function index()
    {
        // Eloquent ORM: Mengambil semua kategori beserta jumlah paket terkait
        $categories = Category::withCount('packages')->latest()->get();

        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Form tambah kategori baru.
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Menyimpan kategori baru (Eloquent ORM).
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'        => 'required|string|max:255|unique:categories,name',
            'description' => 'nullable|string',
            'icon'        => 'nullable|string|max:50',
        ], [
            'name.required' => 'Nama kategori wajib diisi.',
            'name.unique'   => 'Nama kategori sudah terdaftar.',
        ]);

        $validated['slug'] = Str::slug($validated['name']);

        // Eloquent ORM: create
        Category::create($validated);

        return redirect()
            ->route('categories.index')
            ->with('success', 'Kategori layanan berhasil ditambahkan!');
    }

    /**
     * Menampilkan detail kategori (Eloquent ORM).
     */
    public function show(Category $category)
    {
        // Eloquent ORM: load relasi packages
        $category->load('packages');

        return view('admin.categories.show', compact('category'));
    }

    /**
     * Form edit kategori.
     */
    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Memperbarui kategori (Eloquent ORM).
     */
    public function update(Request $request, Category $category)
    {
        $validated = $request->validate([
            'name'        => 'required|string|max:255|unique:categories,name,' . $category->id,
            'description' => 'nullable|string',
            'icon'        => 'nullable|string|max:50',
        ], [
            'name.required' => 'Nama kategori wajib diisi.',
            'name.unique'   => 'Nama kategori sudah digunakan.',
        ]);

        $validated['slug'] = Str::slug($validated['name']);

        // Eloquent ORM: update
        $category->update($validated);

        return redirect()
            ->route('categories.index')
            ->with('success', 'Kategori layanan berhasil diperbarui!');
    }

    /**
     * Menghapus kategori (Eloquent ORM).
     */
    public function destroy(Category $category)
    {
        // Eloquent ORM: delete
        $category->delete();

        return redirect()
            ->route('categories.index')
            ->with('success', 'Kategori layanan berhasil dihapus!');
    }
}

