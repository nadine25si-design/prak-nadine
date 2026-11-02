@extends('layouts.admin')

@section('title', 'Edit Paket: ' . $package->name)

@section('content')
<div class="mb-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb small">
            <li class="breadcrumb-item"><a href="{{ route('packages.index') }}">Paket Laundry</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit: {{ $package->name }}</li>
        </ol>
    </nav>
    <h2 class="fw-bold text-dark mb-1">Edit Paket Laundry</h2>
    <p class="text-muted small mb-0">Perbarui data paket laundry menggunakan Query Builder (DB::table)</p>
</div>

<div class="row">
    <div class="col-lg-8">
        <div class="card card-custom p-4">
            <form action="{{ route('packages.update', $package->id) }}" method="POST">
                @csrf
                @method('PUT')

                <!-- Kategori Layanan -->
                <div class="mb-3">
                    <label for="category_id" class="form-label fw-semibold">Kategori Layanan <span class="text-danger">*</span></label>
                    <select class="form-select @error('category_id') is-invalid @enderror" id="category_id" name="category_id" required>
                        <option value="">-- Pilih Kategori Layanan --</option>
                        @foreach($categories as $cat)
                            <option value="{{ $cat->id }}" {{ (old('category_id', $package->category_id) == $cat->id) ? 'selected' : '' }}>
                                {{ $cat->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Nama Paket -->
                <div class="mb-3">
                    <label for="name" class="form-label fw-semibold">Nama Paket <span class="text-danger">*</span></label>
                    <input 
                        type="text" 
                        class="form-control @error('name') is-invalid @enderror" 
                        id="name" 
                        name="name" 
                        value="{{ old('name', $package->name) }}" 
                        required
                    >
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="row g-3 mb-3">
                    <!-- Harga Paket -->
                    <div class="col-md-6">
                        <label for="price" class="form-label fw-semibold">Harga (Rp) <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <span class="input-group-text bg-light">Rp</span>
                            <input 
                                type="number" 
                                class="form-control @error('price') is-invalid @enderror" 
                                id="price" 
                                name="price" 
                                value="{{ old('price', (int)$package->price) }}" 
                                min="0" 
                                step="500" 
                                required
                            >
                        </div>
                        @error('price')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Satuan Hitung -->
                    <div class="col-md-6">
                        <label for="unit" class="form-label fw-semibold">Satuan Hitung <span class="text-danger">*</span></label>
                        <select class="form-select @error('unit') is-invalid @enderror" id="unit" name="unit" required>
                            <option value="Kg" {{ old('unit', $package->unit) == 'Kg' ? 'selected' : '' }}>Kg (Kilogram)</option>
                            <option value="Pcs" {{ old('unit', $package->unit) == 'Pcs' ? 'selected' : '' }}>Pcs (Per Lembar)</option>
                            <option value="Pasang" {{ old('unit', $package->unit) == 'Pasang' ? 'selected' : '' }}>Pasang (Sepatu/Kaos Kaki)</option>
                            <option value="Trip" {{ old('unit', $package->unit) == 'Trip' ? 'selected' : '' }}>Trip (Antar/Jemput)</option>
                            <option value="Set" {{ old('unit', $package->unit) == 'Set' ? 'selected' : '' }}>Set (Sprei + Bedcover)</option>
                        </select>
                        @error('unit')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <!-- Estimasi Durasi -->
                <div class="mb-3">
                    <label for="duration" class="form-label fw-semibold">Estimasi Durasi Pengerjaan <span class="text-danger">*</span></label>
                    <input 
                        type="text" 
                        class="form-control @error('duration') is-invalid @enderror" 
                        id="duration" 
                        name="duration" 
                        value="{{ old('duration', $package->duration) }}" 
                        required
                    >
                    @error('duration')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Deskripsi Paket -->
                <div class="mb-3">
                    <label for="description" class="form-label fw-semibold">Deskripsi Layanan Paket</label>
                    <textarea 
                        class="form-control @error('description') is-invalid @enderror" 
                        id="description" 
                        name="description" 
                        rows="3" 
                    >{{ old('description', $package->description) }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Status Aktif -->
                <div class="mb-4">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="is_active" name="is_active" value="1" {{ old('is_active', $package->is_active) ? 'checked' : '' }}>
                        <label class="form-check-label fw-semibold" for="is_active">Aktifkan paket laundry ini</label>
                    </div>
                    <small class="text-muted">Paket aktif akan ditampilkan di halaman depan web untuk pelanggan.</small>
                </div>

                <!-- Tombol Submit -->
                <div class="d-flex justify-content-between pt-2 border-top">
                    <a href="{{ route('packages.index') }}" class="btn btn-outline-secondary px-4 fw-semibold">
                        <i class="bi bi-arrow-left me-1"></i> Batal
                    </a>
                    <button type="submit" class="btn btn-warning text-white px-4 fw-semibold shadow-sm">
                        <i class="bi bi-pencil-square me-1"></i> Perbarui Paket Laundry
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Info Box -->
    <div class="col-lg-4 mt-4 mt-lg-0">
        <div class="card card-custom p-4">
            <h5 class="fw-bold text-dark mb-3">Metadata Paket</h5>
            <table class="table table-sm table-borderless small mb-0">
                <tr>
                    <td class="text-muted" style="width: 120px;">ID Paket:</td>
                    <td class="fw-semibold">#{{ $package->id }}</td>
                </tr>
                <tr>
                    <td class="text-muted">ID Kategori:</td>
                    <td>#{{ $package->category_id }}</td>
                </tr>
                <tr>
                    <td class="text-muted">Dibuat Pada:</td>
                    <td>{{ $package->created_at ?? '-' }}</td>
                </tr>
                <tr>
                    <td class="text-muted">Terakhir Update:</td>
                    <td>{{ $package->updated_at ?? '-' }}</td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection

