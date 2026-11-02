@extends('layouts.guest')

@section('title', 'Register - Laundry Kita')

@section('content')
<!-- Hero / Banner Section -->
<div class="slider-area2 section-bg2" style="background-image: url('{{ asset('assets/img/hero/hero2.png') }}'); background-size: cover; background-position: center; padding: 60px 0 40px;">
    <div class="container text-center">
        <h2 style="font-weight: 700; color: #072366; margin-bottom: 10px;">Daftar Akun Baru</h2>
        <p style="color: #64748b; margin-bottom: 0;">Lengkapi formulir di bawah untuk membuat akun Laundry Kita</p>
    </div>
</div>

<div class="container py-5 my-4">
    <div class="row justify-content-center">
        <div class="col-md-7 col-lg-6">
            <div class="card p-4 p-md-5 bg-white shadow-sm" style="border: 1px solid #e2e8f0; border-radius: 16px;">
                <!-- Header Form -->
                <div class="text-center mb-4">
                    <img src="{{ asset('assets/img/logo/logo laundry_kita.png') }}" alt="Laundry Kita" style="width: 150px; height: auto;" class="mb-3">
                    <h3 class="fw-bold mb-1" style="color: #072366; font-size: 24px;">Registrasi Akun</h3>
                    <p class="text-muted small">Silakan lengkapi data diri Anda</p>
                </div>

                <!-- Alert Validation Errors -->
                @if($errors->any())
                    <div class="alert alert-danger" role="alert" style="border-radius: 10px; padding: 12px 16px;">
                        <strong class="d-block mb-1">Terjadi kesalahan input:</strong>
                        <ul class="mb-0 pl-3">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Form Register -->
                <form action="{{ route('register.post') }}" method="POST">
                    @csrf

                    <!-- 1. Inputan Name -->
                    <div class="form-group mb-3">
                        <label for="name" class="form-label fw-semibold" style="color: #072366; font-weight: 600;">Name</label>
                        <input 
                            type="text" 
                            class="form-control @error('name') is-invalid @enderror" 
                            id="name" 
                            name="name" 
                            value="{{ old('name') }}" 
                            placeholder="Masukkan Nama Lengkap Anda" 
                            required 
                            autofocus
                            style="min-height: 48px; border-radius: 8px; border: 1px solid #dce4ef;"
                        >
                    </div>

                    <!-- 2. Inputan Email -->
                    <div class="form-group mb-3">
                        <label for="email" class="form-label fw-semibold" style="color: #072366; font-weight: 600;">Email</label>
                        <input 
                            type="email" 
                            class="form-control @error('email') is-invalid @enderror" 
                            id="email" 
                            name="email" 
                            value="{{ old('email') }}" 
                            placeholder="nama@email.com" 
                            required
                            style="min-height: 48px; border-radius: 8px; border: 1px solid #dce4ef;"
                        >
                    </div>

                    <!-- 3. Inputan Password -->
                    <div class="form-group mb-3">
                        <label for="password" class="form-label fw-semibold" style="color: #072366; font-weight: 600;">Password</label>
                        <input 
                            type="password" 
                            class="form-control @error('password') is-invalid @enderror" 
                            id="password" 
                            name="password" 
                            placeholder="Minimal 6 karakter" 
                            required
                            style="min-height: 48px; border-radius: 8px; border: 1px solid #dce4ef;"
                        >
                    </div>

                    <!-- 4. Inputan Confirm Password -->
                    <div class="form-group mb-4">
                        <label for="password_confirmation" class="form-label fw-semibold" style="color: #072366; font-weight: 600;">Confirm Password</label>
                        <input 
                            type="password" 
                            class="form-control" 
                            id="password_confirmation" 
                            name="password_confirmation" 
                            placeholder="Ulangi password di atas" 
                            required
                            style="min-height: 48px; border-radius: 8px; border: 1px solid #dce4ef;"
                        >
                    </div>

                    <!-- Tombol Register -->
                    <button type="submit" class="btn btn-primary w-100 py-3 fw-semibold shadow-sm mb-3" style="width: 100%; border-radius: 8px; background: #6480ff; border: none; font-size: 16px; font-weight: 600; cursor: pointer;">
                        <i class="ti-pencil-alt" style="margin-right: 6px;"></i> Daftar Sekarang
                    </button>
                </form>

                <!-- Footer Form -->
                <div class="text-center pt-3 border-top mt-2">
                    <p class="text-muted small mb-1">
                        Sudah punya akun? 
                        <a href="{{ route('login') }}" class="fw-semibold text-primary" style="color: #6480ff !important; font-weight: 600;">Masuk di sini</a>
                    </p>
                    <a href="{{ url('/') }}" class="text-muted small text-decoration-none">
                        &larr; Kembali ke Beranda
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
