@extends('layouts.admin')

@section('title', 'Paket Laundry (Query Builder)')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2">
    <div>
        <div class="d-flex align-items-center gap-2">
            <h2 class="fw-bold text-dark mb-0">Paket Laundry</h2>
            <span class="badge bg-success-subtle text-success border border-success-subtle px-2 py-1">Query Builder (DB::table)</span>
        </div>
        <p class="text-muted small mb-0 mt-1">Kelola data paket laundry dengan LEFT JOIN kategori, WHERE, dan Nested WHERE</p>
    </div>
    <a href="{{ route('packages.create') }}" class="btn btn-primary fw-semibold shadow-sm">
        <i class="bi bi-plus-lg me-1"></i> Tambah Paket
    </a>
</div>

<!-- Card Filter & Pencarian (Penerapan WHERE dan Nested WHERE) -->
<div class="card card-custom mb-4 p-3 bg-white">
    <form action="{{ route('packages.index') }}" method="GET" class="row g-2 align-items-center">
        <!-- Input Pencarian (Nested WHERE) -->
        <div class="col-md-4">
            <div class="input-group">
                <span class="input-group-text bg-light border-end-0 text-muted"><i class="bi bi-search"></i></span>
                <input 
                    type="text" 
                    name="search" 
                    class="form-control border-start-0" 
                    placeholder="Cari nama paket, deskripsi, kategori..." 
                    value="{{ request('search') }}"
                >
            </div>
        </div>

        <!-- Filter Kategori (WHERE) -->
        <div class="col-md-3">
            <select name="category_id" class="form-select">
                <option value="">-- Semua Kategori --</option>
                @foreach($categories as $cat)
                    <option value="{{ $cat->id }}" {{ request('category_id') == $cat->id ? 'selected' : '' }}>
                        {{ $cat->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Filter Status (WHERE) -->
        <div class="col-md-2">
            <select name="status" class="form-select">
                <option value="">-- Semua Status --</option>
                <option value="1" {{ request('status') === '1' ? 'selected' : '' }}>Aktif</option>
                <option value="0" {{ request('status') === '0' ? 'selected' : '' }}>Nonaktif</option>
            </select>
        </div>

        <!-- Tombol Aksi Filter -->
        <div class="col-md-3 d-flex gap-2">
            <button type="submit" class="btn btn-primary w-100 fw-semibold">
                <i class="bi bi-funnel me-1"></i> Filter
            </button>
            @if(request()->hasAny(['search', 'category_id', 'status']))
                <a href="{{ route('packages.index') }}" class="btn btn-outline-secondary" title="Reset Filter">
                    <i class="bi bi-arrow-counterclockwise"></i>
                </a>
            @endif
        </div>
    </form>
</div>

<!-- Card Tabel Paket Laundry -->
<div class="card card-custom">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light text-uppercase fs-7 text-secondary">
                    <tr>
                        <th class="py-3 px-4" style="width: 60px;">No</th>
                        <th class="py-3">Nama Paket</th>
                        <th class="py-3">Kategori (LEFT JOIN)</th>
                        <th class="py-3">Harga</th>
                        <th class="py-3">Durasi</th>
                        <th class="py-3 text-center">Status</th>
                        <th class="py-3 text-center" style="width: 200px;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($packages as $index => $pkg)
                        <tr>
                            <td class="px-4 fw-semibold text-secondary">{{ $index + 1 }}</td>
                            <td>
                                <div class="fw-bold text-dark">{{ $pkg->name }}</div>
                                <small class="text-muted">{{ Str::limit($pkg->description, 50, '...') ?? '-' }}</small>
                            </td>
                            <td>
                                @if($pkg->category_name)
                                    <span class="badge bg-primary-subtle text-primary border border-primary-subtle px-2 py-1">
                                        <i class="bi bi-tag-fill me-1"></i>{{ $pkg->category_name }}
                                    </span>
                                @else
                                    <span class="badge bg-secondary-subtle text-muted">Tanpa Kategori</span>
                                @endif
                            </td>
                            <td>
                                <span class="fw-bold text-primary">Rp {{ number_format($pkg->price, 0, ',', '.') }}</span>
                                <small class="text-muted">/ {{ $pkg->unit }}</small>
                            </td>
                            <td class="text-secondary small">
                                <i class="bi bi-clock me-1 text-muted"></i>{{ $pkg->duration }}
                            </td>
                            <td class="text-center">
                                @if($pkg->is_active)
                                    <span class="badge bg-success-subtle text-success border border-success-subtle px-2 py-1">
                                        <i class="bi bi-check-circle me-1"></i>Aktif
                                    </span>
                                @else
                                    <span class="badge bg-secondary-subtle text-secondary border border-secondary-subtle px-2 py-1">
                                        <i class="bi bi-x-circle me-1"></i>Nonaktif
                                    </span>
                                @endif
                            </td>
                            <td class="text-center">
                                <div class="btn-group btn-group-sm" role="group">
                                    <a href="{{ route('packages.show', $pkg->id) }}" class="btn btn-outline-info" title="Lihat Detail">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                    <a href="{{ route('packages.edit', $pkg->id) }}" class="btn btn-outline-warning" title="Edit">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <form action="{{ route('packages.destroy', $pkg->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus paket \'{{ $pkg->name }}\'?')">
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
                            <td colspan="7" class="text-center py-5 text-muted">
                                <i class="bi bi-box-seam fs-1 d-block mb-2 text-secondary opacity-50"></i>
                                <span class="fw-medium">Tidak ada data paket laundry yang cocok dengan kriteria pencarian.</span>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

