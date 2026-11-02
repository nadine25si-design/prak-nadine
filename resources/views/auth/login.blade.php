@extends('layouts.guest')

@section('title', 'Login - Laundry Kita')

@section('content')
<!-- Hero / Banner Section -->
<div class="slider-area2 section-bg2" style="background-image: url('{{ asset('assets/img/hero/hero2.png') }}'); background-size: cover; background-position: center; padding: 60px 0 40px;">
    <div class="container text-center">
        <h2 style="font-weight: 700; color: #072366; margin-bottom: 10px;">Login Pengguna</h2>
        <p style="color: #64748b; margin-bottom: 0;">Silakan masuk ke akun Laundry Kita Anda</p>
    </div>
</div>

<div class="container py-5 my-4">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
            <div class="card p-4 p-md-5 bg-white shadow-sm" style="border: 1px solid #e2e8f0; border-radius: 16px;">
                <!-- Header Form -->
                <div class="text-center mb-4">
                    <img src="{{ asset('assets/img/logo/logo laundry_kita.png') }}" alt="Laundry Kita" style="width: 150px; height: auto;" class="mb-3">
                    <h3 class="fw-bold mb-1" style="color: #072366; font-size: 24px;">Masuk ke Akun</h3>
                    <p class="text-muted small">Masukkan username dan password Anda</p>
                </div>

                <!-- Alert Notifikasi Error (Jika Login Salah) -->
                @if(session('error'))
                    <div class="alert alert-danger d-flex align-items-center" role="alert" style="border-radius: 10px; padding: 12px 16px;">
                        <i class="ti-alert mr-2" style="margin-right: 8px; font-size: 18px;"></i>
                        <div>
                            <strong>Login Gagal!</strong> {{ session('error') }}
                        </div>
                    </div>
                @endif

                <!-- Alert Notifikasi Sukses -->
                @if(session('success'))
                    <div class="alert alert-success d-flex align-items-center" role="alert" style="border-radius: 10px; padding: 12px 16px;">
                        <i class="ti-check mr-2" style="margin-right: 8px; font-size: 18px;"></i>
                        <div>
                            <strong>Sukses!</strong> {{ session('success') }}
                        </div>
                    </div>
                @endif

                <!-- Alert Validation Errors -->
                @if($errors->any())
                    <div class="alert alert-danger" role="alert" style="border-radius: 10px; padding: 12px 16px;">
                        <ul class="mb-0 pl-3">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Form Login -->
                <form action="{{ route('login.post') }}" method="POST">
                    @csrf

                    <!-- Inputan Username -->
                    <div class="form-group mb-3">
                        <label for="username" class="form-label fw-semibold" style="color: #072366; font-weight: 600;">Username</label>
                        <input 
                            type="text" 
                            class="form-control @error('username') is-invalid @enderror" 
                            id="username" 
                            name="username" 
                            value="{{ old('username') }}" 
                            placeholder="Masukkan Username Anda" 
                            required 
                            autofocus
                            style="min-height: 48px; border-radius: 8px; border: 1px solid #dce4ef;"
                        >
                    </div>

                    <!-- Inputan Password -->
                    <div class="form-group mb-4">
                        <label for="password" class="form-label fw-semibold" style="color: #072366; font-weight: 600;">Password</label>
                        <input 
                            type="password" 
                            class="form-control @error('password') is-invalid @enderror" 
                            id="password" 
                            name="password" 
                            placeholder="Masukkan Password Anda" 
                            required
                            style="min-height: 48px; border-radius: 8px; border: 1px solid #dce4ef;"
                        >
                    </div>

                    <!-- Tombol Login -->
                    <button type="submit" class="btn btn-primary w-100 py-3 fw-semibold shadow-sm mb-3" style="width: 100%; border-radius: 8px; background: #6480ff; border: none; font-size: 16px; font-weight: 600; cursor: pointer;">
                        <i class="ti-unlock" style="margin-right: 6px;"></i> Login
                    </button>
                </form>

                <!-- Footer Form -->
                <div class="text-center pt-3 border-top mt-2">
                    <p class="text-muted small mb-1">
                        Belum punya akun? 
                        <a href="{{ route('register') }}" class="fw-semibold text-primary" style="color: #6480ff !important; font-weight: 600;">Daftar Sekarang</a>
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
