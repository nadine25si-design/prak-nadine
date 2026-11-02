@extends('layouts.admin')

@section('title', 'Edit Kategori: ' . $category->name)

@section('content')
<div class="mb-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb small">
            <li class="breadcrumb-item"><a href="{{ route('categories.index') }}">Kategori Layanan</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit: {{ $category->name }}</li>
        </ol>
    </nav>
    <h2 class="fw-bold text-dark mb-1">Edit Kategori Layanan</h2>
    <p class="text-muted small mb-0">Perbarui data kategori layanan menggunakan Eloquent ORM</p>
</div>

<div class="row">
    <div class="col-lg-7">
        <div class="card card-custom p-4">
            <form action="{{ route('categories.update', $category->id) }}" method="POST">
                @csrf
                @method('PUT')

                <!-- Nama Kategori -->
                <div class="mb-3">
                    <label for="name" class="form-label fw-semibold">Nama Kategori <span class="text-danger">*</span></label>
                    <input 
                        type="text" 
                        class="form-control @error('name') is-invalid @enderror" 
                        id="name" 
                        name="name" 
                        value="{{ old('name', $category->name) }}" 
                        required 
                        autofocus
                    >
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Ikon Bootstrap Icons -->
                <div class="mb-3">
                    <label for="icon" class="form-label fw-semibold">Ikon (Bootstrap Icons)</label>
                    <select class="form-select @error('icon') is-invalid @enderror" id="icon" name="icon">
                        <option value="bi-tags" {{ old('icon', $category->icon) == 'bi-tags' ? 'selected' : '' }}>Tag / Label (bi-tags)</option>
                        <option value="bi-basket3" {{ old('icon', $category->icon) == 'bi-basket3' ? 'selected' : '' }}>Keranjang Cucian (bi-basket3)</option>
                        <option value="bi-fire" {{ old('icon', $category->icon) == 'bi-fire' ? 'selected' : '' }}>Setrika / Uap (bi-fire)</option>
                        <option value="bi-truck" {{ old('icon', $category->icon) == 'bi-truck' ? 'selected' : '' }}>Truk / Kurir (bi-truck)</option>
                        <option value="bi-stars" {{ old('icon', $category->icon) == 'bi-stars' ? 'selected' : '' }}>Bintang / Premium (bi-stars)</option>
                        <option value="bi-box-seam" {{ old('icon', $category->icon) == 'bi-box-seam' ? 'selected' : '' }}>Paket / Box (bi-box-seam)</option>
                    </select>
                    <small class="text-muted">Pilih ikon yang mewakili kategori layanan ini.</small>
                    @error('icon')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Deskripsi Kategori -->
                <div class="mb-4">
                    <label for="description" class="form-label fw-semibold">Deskripsi Kategori</label>
                    <textarea 
                        class="form-control @error('description') is-invalid @enderror" 
                        id="description" 
                        name="description" 
                        rows="4" 
                    >{{ old('description', $category->description) }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Tombol Submit -->
                <div class="d-flex justify-content-between pt-2 border-top">
                    <a href="{{ route('categories.index') }}" class="btn btn-outline-secondary px-4 fw-semibold">
                        <i class="bi bi-arrow-left me-1"></i> Batal
                    </a>
                    <button type="submit" class="btn btn-warning text-white px-4 fw-semibold shadow-sm">
                        <i class="bi bi-pencil-square me-1"></i> Perbarui Kategori
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Info Box -->
    <div class="col-lg-5 mt-4 mt-lg-0">
        <div class="card card-custom p-4">
            <h5 class="fw-bold text-dark mb-3">Detail Kategori Saat Ini</h5>
            <table class="table table-sm table-borderless small mb-0">
                <tr>
                    <td class="text-muted" style="width: 120px;">ID Kategori:</td>
                    <td class="fw-semibold">#{{ $category->id }}</td>
                </tr>
                <tr>
                    <td class="text-muted">Slug:</td>
                    <td><code>{{ $category->slug }}</code></td>
                </tr>
                <tr>
                    <td class="text-muted">Dibuat Pada:</td>
                    <td>{{ $category->created_at ? $category->created_at->format('d M Y, H:i') : '-' }}</td>
                </tr>
                <tr>
                    <td class="text-muted">Terakhir Update:</td>
                    <td>{{ $category->updated_at ? $category->updated_at->format('d M Y, H:i') : '-' }}</td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection

