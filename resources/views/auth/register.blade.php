@extends('layouts.guest')

@section('title', 'Register - Laundry Kita')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-7 col-lg-6">
            <div class="card card-custom p-4 p-md-5 bg-white">
                <!-- Header Form -->
                <div class="text-center mb-4">
                    <div class="d-inline-flex align-items-center justify-content-center bg-primary bg-opacity-10 text-primary rounded-circle mb-3" style="width: 64px; height: 64px;">
                        <i class="bi bi-person-plus fs-2"></i>
                    </div>
                    <h3 class="fw-bold mb-1">Daftar Akun Baru</h3>
                    <p class="text-muted small">Lengkapi formulir di bawah untuk membuat akun Laundry Kita</p>
                </div>

                <!-- Alert Validation Errors -->
                @if($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong class="d-block mb-1">Terjadi kesalahan input:</strong>
                        <ul class="mb-0 ps-3">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <!-- Form Register -->
                <form action="{{ route('register.post') }}" method="POST">
                    @csrf

                    <!-- 1. Inputan Name -->
                    <div class="mb-3">
                        <label for="name" class="form-label fw-semibold">Name</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light text-muted border-end-0">
                                <i class="bi bi-person"></i>
                            </span>
                            <input 
                                type="text" 
                                class="form-control border-start-0 @error('name') is-invalid @enderror" 
                                id="name" 
                                name="name" 
                                value="{{ old('name') }}" 
                                placeholder="Masukkan Nama Lengkap Anda" 
                                required 
                                autofocus
                            >
                        </div>
                    </div>

                    <!-- 2. Inputan Email -->
                    <div class="mb-3">
                        <label for="email" class="form-label fw-semibold">Email</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light text-muted border-end-0">
                                <i class="bi bi-envelope"></i>
                            </span>
                            <input 
                                type="email" 
                                class="form-control border-start-0 @error('email') is-invalid @enderror" 
                                id="email" 
                                name="email" 
                                value="{{ old('email') }}" 
                                placeholder="nama@email.com" 
                                required
                            >
                        </div>
                    </div>

                    <!-- 3. Inputan Password -->
                    <div class="mb-3">
                        <label for="password" class="form-label fw-semibold">Password</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light text-muted border-end-0">
                                <i class="bi bi-lock"></i>
                            </span>
                            <input 
                                type="password" 
                                class="form-control border-start-0 @error('password') is-invalid @enderror" 
                                id="password" 
                                name="password" 
                                placeholder="Minimal 6 karakter" 
                                required
                            >
                        </div>
                    </div>

                    <!-- 4. Inputan Confirm Password -->
                    <div class="mb-4">
                        <label for="password_confirmation" class="form-label fw-semibold">Confirm Password</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light text-muted border-end-0">
                                <i class="bi bi-shield-lock"></i>
                            </span>
                            <input 
                                type="password" 
                                class="form-control border-start-0" 
                                id="password_confirmation" 
                                name="password_confirmation" 
                                placeholder="Ulangi Password Anda" 
                                required
                            >
                        </div>
                    </div>

                    <!-- Tombol Submit Register -->
                    <button type="submit" class="btn btn-primary w-100 py-2 fw-semibold shadow-sm mb-3">
                        <i class="bi bi-person-check me-1"></i> Register
                    </button>
                </form>

                <!-- Navigasi ke Login -->
                <div class="text-center small text-muted">
                    Sudah memiliki akun? 
                    <a href="{{ route('login') }}" class="text-primary fw-semibold text-decoration-none">
                        Login Sekarang (/auth)
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

