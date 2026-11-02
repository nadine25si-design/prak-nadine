<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PackageController extends Controller
{
    /**
     * Menampilkan daftar paket laundry menggunakan Query Builder (DB::table).
     * Menerapkan LEFT JOIN dengan tabel categories, WHERE, dan Nested WHERE untuk pencarian.
     */
    public function index(Request $request)
    {
        // Query Builder dasar dengan LEFT JOIN ke tabel categories
        $query = DB::table('packages')
            ->leftJoin('categories', 'packages.category_id', '=', 'categories.id')
            ->select(
                'packages.*',
                'categories.name as category_name',
                'categories.slug as category_slug'
            );

        // 1. Penerapan WHERE: Filter berdasarkan Kategori
        if ($request->filled('category_id')) {
            $query->where('packages.category_id', '=', $request->category_id);
        }

        // 2. Penerapan WHERE: Filter berdasarkan Status Aktif
        if ($request->filled('status')) {
            $query->where('packages.is_active', '=', (int) $request->status);
        }

        // 3. Penerapan NESTED WHERE: Pencarian multi-kolom (Nama paket, Deskripsi paket, atau Nama kategori)
        if ($request->filled('search')) {
            $search = trim($request->search);
            $query->where(function ($nestedQuery) use ($search) {
                $nestedQuery->where('packages.name', 'like', "%{$search}%")
                            ->orWhere('packages.description', 'like', "%{$search}%")
                            ->orWhere('categories.name', 'like', "%{$search}%");
            });
        }

        // Eksekusi query dengan pengurutan terbaru
        $packages = $query->orderBy('packages.id', 'desc')->get();

        // Mengambil daftar kategori untuk dropdown filter dengan Query Builder
        $categories = DB::table('categories')->orderBy('name', 'asc')->get();

        return view('admin.packages.index', compact('packages', 'categories'));
    }

    /**
     * Form tambah paket baru.
     */
    public function create()
    {
        // Query Builder untuk mengambil opsi kategori
        $categories = DB::table('categories')->orderBy('name', 'asc')->get();

        return view('admin.packages.create', compact('categories'));
    }

    /**
     * Menyimpan paket baru menggunakan Query Builder (DB::table).
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name'        => 'required|string|max:255',
            'price'       => 'required|numeric|min:0',
            'unit'        => 'required|string|max:50',
            'duration'    => 'required|string|max:100',
            'description' => 'nullable|string',
        ], [
            'category_id.required' => 'Kategori layanan wajib dipilih.',
            'category_id.exists'   => 'Kategori yang dipilih tidak valid.',
            'name.required'        => 'Nama paket wajib diisi.',
            'price.required'       => 'Harga paket wajib diisi.',
            'price.numeric'        => 'Harga paket harus berupa angka.',
            'unit.required'        => 'Satuan hitung wajib diisi.',
            'duration.required'    => 'Estimasi durasi kerja wajib diisi.',
        ]);

        // Query Builder: insert data paket baru
        DB::table('packages')->insert([
            'category_id' => $request->category_id,
            'name'        => $request->name,
            'price'       => $request->price,
            'unit'        => $request->unit,
            'duration'    => $request->duration,
            'description' => $request->description,
            'is_active'   => $request->has('is_active') ? 1 : 0,
            'created_at'  => now(),
            'updated_at'  => now(),
        ]);

        return redirect()
            ->route('packages.index')
            ->with('success', 'Paket laundry berhasil ditambahkan!');
    }

    /**
     * Menampilkan detail paket menggunakan Query Builder dengan LEFT JOIN.
     */
    public function show($id)
    {
        // Query Builder: LEFT JOIN & WHERE
        $package = DB::table('packages')
            ->leftJoin('categories', 'packages.category_id', '=', 'categories.id')
            ->select(
                'packages.*',
                'categories.name as category_name',
                'categories.description as category_description'
            )
            ->where('packages.id', '=', $id)
            ->first();

        if (!$package) {
            return redirect()
                ->route('packages.index')
                ->with('error', 'Paket laundry tidak ditemukan.');
        }

        return view('admin.packages.show', compact('package'));
    }

    /**
     * Form edit paket laundry.
     */
    public function edit($id)
    {
        // Query Builder: ambil data paket
        $package = DB::table('packages')->where('id', '=', $id)->first();

        if (!$package) {
            return redirect()
                ->route('packages.index')
                ->with('error', 'Paket laundry tidak ditemukan.');
        }

        // Query Builder: ambil daftar kategori
        $categories = DB::table('categories')->orderBy('name', 'asc')->get();

        return view('admin.packages.edit', compact('package', 'categories'));
    }

    /**
     * Memperbarui paket laundry menggunakan Query Builder (DB::table).
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name'        => 'required|string|max:255',
            'price'       => 'required|numeric|min:0',
            'unit'        => 'required|string|max:50',
            'duration'    => 'required|string|max:100',
            'description' => 'nullable|string',
        ], [
            'category_id.required' => 'Kategori layanan wajib dipilih.',
            'category_id.exists'   => 'Kategori yang dipilih tidak valid.',
            'name.required'        => 'Nama paket wajib diisi.',
            'price.required'       => 'Harga paket wajib diisi.',
            'price.numeric'        => 'Harga paket harus berupa angka.',
            'unit.required'        => 'Satuan hitung wajib diisi.',
            'duration.required'    => 'Estimasi durasi kerja wajib diisi.',
        ]);

        // Query Builder: update data paket
        $updated = DB::table('packages')
            ->where('id', '=', $id)
            ->update([
                'category_id' => $request->category_id,
                'name'        => $request->name,
                'price'       => $request->price,
                'unit'        => $request->unit,
                'duration'    => $request->duration,
                'description' => $request->description,
                'is_active'   => $request->has('is_active') ? 1 : 0,
                'updated_at'  => now(),
            ]);

        return redirect()
            ->route('packages.index')
            ->with('success', 'Paket laundry berhasil diperbarui!');
    }

    /**
     * Menghapus paket laundry menggunakan Query Builder (DB::table).
     */
    public function destroy($id)
    {
        // Query Builder: delete
        DB::table('packages')->where('id', '=', $id)->delete();

        return redirect()
            ->route('packages.index')
            ->with('success', 'Paket laundry berhasil dihapus!');
    }
}

