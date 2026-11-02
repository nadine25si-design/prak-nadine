@extends('layouts.admin')

@section('title', 'Detail Paket: ' . $package->name)

@section('content')
<div class="mb-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb small">
            <li class="breadcrumb-item"><a href="{{ route('packages.index') }}">Paket Laundry</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail: {{ $package->name }}</li>
        </ol>
    </nav>
    <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
        <div>
            <h2 class="fw-bold text-dark mb-1">Detail Paket Laundry</h2>
            <p class="text-muted small mb-0">Informasi paket laundry diambil melalui Query Builder dengan LEFT JOIN ke tabel kategori</p>
        </div>
        <div class="d-flex gap-2">
            <a href="{{ route('packages.edit', $package->id) }}" class="btn btn-warning text-white fw-semibold">
                <i class="bi bi-pencil-square me-1"></i> Edit Paket
            </a>
            <a href="{{ route('packages.index') }}" class="btn btn-outline-secondary fw-semibold">
                <i class="bi bi-arrow-left me-1"></i> Kembali
            </a>
        </div>
    </div>
</div>

<div class="row g-4">
    <div class="col-lg-7">
        <div class="card card-custom p-4">
            <div class="d-flex justify-content-between align-items-start mb-3">
                <div>
                    <span class="badge bg-primary-subtle text-primary border border-primary-subtle px-3 py-1 mb-2">
                        <i class="bi bi-tag-fill me-1"></i>{{ $package->category_name ?? 'Tanpa Kategori' }}
                    </span>
                    <h3 class="fw-bold text-dark mb-1">{{ $package->name }}</h3>
                </div>
                <div>
                    @if($package->is_active)
                        <span class="badge bg-success-subtle text-success border border-success-subtle px-3 py-1 fs-7">
                            <i class="bi bi-check-circle me-1"></i>Aktif
                        </span>
                    @else
                        <span class="badge bg-secondary-subtle text-secondary border border-secondary-subtle px-3 py-1 fs-7">
                            <i class="bi bi-x-circle me-1"></i>Nonaktif
                        </span>
                    @endif
                </div>
            </div>

            <div class="bg-light p-3 rounded-3 mb-4">
                <div class="row text-center">
                    <div class="col-6 border-end">
                        <small class="text-muted text-uppercase fw-semibold">Harga Paket</small>
                        <h4 class="fw-bold text-primary mb-0 mt-1">Rp {{ number_format($package->price, 0, ',', '.') }}</h4>
                        <small class="text-muted">per {{ $package->unit }}</small>
                    </div>
                    <div class="col-6">
                        <small class="text-muted text-uppercase fw-semibold">Durasi Kerja</small>
                        <h4 class="fw-bold text-dark mb-0 mt-1">{{ $package->duration }}</h4>
                        <small class="text-muted">Estimasi Selesai</small>
                    </div>
                </div>
            </div>

            <h6 class="fw-bold text-dark mb-2">Deskripsi Layanan:</h6>
            <p class="text-muted mb-4">{{ $package->description ?? 'Belum ada deskripsi layanan untuk paket ini.' }}</p>

            <div class="border-top pt-3 small text-muted">
                <div class="d-flex justify-content-between py-1">
                    <span>ID Paket:</span>
                    <strong>#{{ $package->id }}</strong>
                </div>
                <div class="d-flex justify-content-between py-1">
                    <span>ID Kategori (Foreign Key):</span>
                    <strong>#{{ $package->category_id }}</strong>
                </div>
                <div class="d-flex justify-content-between py-1">
                    <span>Deskripsi Kategori (LEFT JOIN):</span>
                    <span>{{ $package->category_description ?? '-' }}</span>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-5">
        <div class="card card-custom p-4 bg-primary bg-opacity-10 border-primary border-opacity-25 h-100">
            <h5 class="fw-bold text-primary mb-3"><i class="bi bi-database-check me-1"></i> Bukti Query Builder & Relasi</h5>
            <p class="small text-muted mb-3">
                Detail ini dieksekusi menggunakan SQL query berikut di controller:
            </p>
            <div class="bg-dark text-light p-3 rounded-2 small font-monospace mb-3">
                DB::table('packages')<br>
                &nbsp;&nbsp;->leftJoin('categories', ...)<br>
                &nbsp;&nbsp;->where('packages.id', '=', {{ $package->id }})<br>
                &nbsp;&nbsp;->first();
            </div>
            <p class="small text-muted mb-0">
                Nama kategori <strong>"{{ $package->category_name }}"</strong> berhasil diambil melalui relasi foreign key <code>packages.category_id &rarr; categories.id</code> dengan mekanisme LEFT JOIN.
            </p>
        </div>
    </div>
</div>
@endsection

