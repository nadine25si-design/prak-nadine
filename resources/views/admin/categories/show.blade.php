@extends('layouts.admin')

@section('title', 'Detail Kategori: ' . $category->name)

@section('content')
<div class="mb-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb small">
            <li class="breadcrumb-item"><a href="{{ route('categories.index') }}">Kategori Layanan</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail: {{ $category->name }}</li>
        </ol>
    </nav>
    <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
        <div>
            <h2 class="fw-bold text-dark mb-1">Detail Kategori Layanan</h2>
            <p class="text-muted small mb-0">Informasi lengkap kategori dan daftar paket di dalamnya (Relasi Eloquent HasMany)</p>
        </div>
        <div class="d-flex gap-2">
            <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning text-white fw-semibold">
                <i class="bi bi-pencil-square me-1"></i> Edit Kategori
            </a>
            <a href="{{ route('categories.index') }}" class="btn btn-outline-secondary fw-semibold">
                <i class="bi bi-arrow-left me-1"></i> Kembali
            </a>
        </div>
    </div>
</div>

<!-- Kartu Informasi Kategori -->
<div class="row g-4 mb-4">
    <div class="col-md-5">
        <div class="card card-custom p-4 h-100">
            <div class="d-flex align-items-center gap-3 mb-3">
                <div class="bg-primary bg-opacity-10 text-primary p-3 rounded-3">
                    <i class="bi {{ $category->icon ?? 'bi-tag' }} fs-3"></i>
                </div>
                <div>
                    <h4 class="fw-bold text-dark mb-0">{{ $category->name }}</h4>
                    <span class="badge bg-light text-primary border">ID #{{ $category->id }}</span>
                </div>
            </div>
            <p class="text-muted mb-4">{{ $category->description ?? 'Tidak ada deskripsi.' }}</p>
            <div class="border-top pt-3 small text-muted">
                <div class="d-flex justify-content-between py-1">
                    <span>Slug:</span>
                    <code>{{ $category->slug }}</code>
                </div>
                <div class="d-flex justify-content-between py-1">
                    <span>Total Paket:</span>
                    <strong class="text-dark">{{ $category->packages->count() }} Paket</strong>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-7">
        <div class="card card-custom h-100">
            <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
                <h6 class="fw-bold text-dark mb-0"><i class="bi bi-box-seam me-1"></i> Daftar Paket dalam Kategori Ini</h6>
                <a href="{{ route('packages.create', ['category_id' => $category->id]) }}" class="btn btn-sm btn-primary">
                    <i class="bi bi-plus-lg me-1"></i> Tambah Paket
                </a>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="table-light text-uppercase fs-7 text-secondary">
                            <tr>
                                <th class="py-2 px-3">Nama Paket</th>
                                <th class="py-2">Harga</th>
                                <th class="py-2">Durasi</th>
                                <th class="py-2 text-center">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($category->packages as $pkg)
                                <tr>
                                    <td class="px-3 fw-semibold text-dark">{{ $pkg->name }}</td>
                                    <td class="text-primary fw-bold">Rp {{ number_format($pkg->price, 0, ',', '.') }} / {{ $pkg->unit }}</td>
                                    <td class="text-muted small">{{ $pkg->duration }}</td>
                                    <td class="text-center">
                                        @if($pkg->is_active)
                                            <span class="badge bg-success-subtle text-success border border-success-subtle">Aktif</span>
                                        @else
                                            <span class="badge bg-secondary-subtle text-secondary border border-secondary-subtle">Nonaktif</span>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center py-4 text-muted small">
                                        Belum ada paket yang terdaftar pada kategori ini.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

