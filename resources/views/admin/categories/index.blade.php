@extends('layouts.admin')

@section('title', 'Kategori Layanan (Eloquent ORM)')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2">
    <div>
        <div class="d-flex align-items-center gap-2">
            <h2 class="fw-bold text-dark mb-0">Kategori Layanan</h2>
            <span class="badge bg-primary-subtle text-primary border border-primary-subtle px-2 py-1">Eloquent ORM</span>
        </div>
        <p class="text-muted small mb-0 mt-1">Kelola data kategori layanan laundry menggunakan Eloquent ORM</p>
    </div>
    <a href="{{ route('categories.create') }}" class="btn btn-primary fw-semibold shadow-sm">
        <i class="bi bi-plus-lg me-1"></i> Tambah Kategori
    </a>
</div>

<!-- Card Tabel Kategori -->
<div class="card card-custom">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light text-uppercase fs-7 text-secondary">
                    <tr>
                        <th class="py-3 px-4" style="width: 60px;">No</th>
                        <th class="py-3">Nama Kategori</th>
                        <th class="py-3">Slug</th>
                        <th class="py-3">Deskripsi</th>
                        <th class="py-3 text-center">Jumlah Paket</th>
                        <th class="py-3 text-center" style="width: 220px;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($categories as $index => $category)
                        <tr>
                            <td class="px-4 fw-semibold text-secondary">{{ $index + 1 }}</td>
                            <td>
                                <div class="d-flex align-items-center gap-2">
                                    <div class="bg-primary bg-opacity-10 text-primary p-2 rounded-2">
                                        <i class="bi {{ $category->icon ?? 'bi-tag' }} fs-5"></i>
                                    </div>
                                    <div>
                                        <div class="fw-bold text-dark">{{ $category->name }}</div>
                                        <small class="text-muted">ID: #{{ $category->id }}</small>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <code class="text-primary bg-light px-2 py-1 rounded">{{ $category->slug }}</code>
                            </td>
                            <td class="text-muted small" style="max-width: 320px;">
                                {{ Str::limit($category->description, 80, '...') ?? '-' }}
                            </td>
                            <td class="text-center">
                                <span class="badge rounded-pill bg-info-subtle text-info border border-info-subtle px-3 py-1">
                                    {{ $category->packages_count ?? 0 }} Paket
                                </span>
                            </td>
                            <td class="text-center">
                                <div class="btn-group btn-group-sm" role="group">
                                    <a href="{{ route('categories.show', $category->id) }}" class="btn btn-outline-info" title="Lihat Detail">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                    <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-outline-warning" title="Edit">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus kategori \'{{ $category->name }}\'? Semua paket di bawah kategori ini juga akan terhapus!')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger" title="Hapus">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center py-5 text-muted">
                                <i class="bi bi-tags fs-1 d-block mb-2 text-secondary opacity-50"></i>
                                <span class="fw-medium">Belum ada data kategori layanan.</span>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

