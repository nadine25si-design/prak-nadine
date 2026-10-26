@extends('layouts.guest')

@section('title', 'Login - Laundry Kita')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
            <div class="card card-custom p-4 p-md-5 bg-white">
                <!-- Header Form -->
                <div class="text-center mb-4">
                    <div class="d-inline-flex align-items-center justify-content-center bg-primary bg-opacity-10 text-primary rounded-circle mb-3" style="width: 64px; height: 64px;">
                        <i class="bi bi-box-arrow-in-right fs-2"></i>
                    </div>
                    <h3 class="fw-bold mb-1">Masuk ke Akun</h3>
                    <p class="text-muted small">Silakan masukkan username dan password Anda</p>
                </div>

                <!-- Alert Notifikasi Error (Jika Login Salah) -->
                @if(session('error'))
                    <div class="alert alert-danger alert-dismissible fade show d-flex align-items-center" role="alert">
                        <i class="bi bi-exclamation-triangle-fill fs-5 me-2 flex-shrink-0"></i>
                        <div>
                            <strong>Login Gagal!</strong> {{ session('error') }}
                        </div>
                        <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <!-- Alert Notifikasi Sukses -->
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show d-flex align-items-center" role="alert">
                        <i class="bi bi-check-circle-fill fs-5 me-2 flex-shrink-0"></i>
                        <div>
                            <strong>Sukses!</strong> {{ session('success') }}
                        </div>
                        <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <!-- Alert Validation Errors -->
                @if($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <ul class="mb-0 ps-3">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <!-- Form Login -->
                <form action="{{ route('login.post') }}" method="POST">
                    @csrf

                    <!-- Inputan Username -->
                    <div class="mb-3">
                        <label for="username" class="form-label fw-semibold">Username</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light text-muted border-end-0">
                                <i class="bi bi-person"></i>
                            </span>
                            <input 
                                type="text" 
                                class="form-control border-start-0 @error('username') is-invalid @enderror" 
                                id="username" 
                                name="username" 
                                value="{{ old('username') }}" 
                                placeholder="Masukkan Username Anda" 
                                required 
                                autofocus
                            >
                        </div>
                    </div>

                    <!-- Inputan Password -->
                    <div class="mb-4">
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
                                placeholder="Masukkan Password Anda" 
                                required
                            >
                        </div>
                    </div>

                    <!-- Tombol Login -->
                    <button type="submit" class="btn btn-primary w-100 py-2 fw-semibold shadow-sm mb-3">
                        <i class="bi bi-box-arrow-in-right me-1"></i> Login
                    </button>
                </form>

                <!-- Petunjuk Soal 2 -->
                <div class="p-3 rounded-3 bg-light border small text-muted mb-4">
                    <i class="bi bi-info-circle-fill text-primary me-1"></i>
                    <strong>Ketentuan Login (Soal 2):</strong>
                    <br>Jika <code>username</code> dan <code>password</code> sama (misal: username <code>admin</code>, password <code>admin</code>), akan diarahkan ke <strong>Dashboard Admin</strong>. Jika tidak sama, akan dikembalikan ke form ini dengan <strong>Alert</strong>.
                </div>

                <!-- Navigasi ke Register -->
                <div class="text-center small text-muted">
                    Belum memiliki akun? 
                    <a href="{{ route('register') }}" class="text-primary fw-semibold text-decoration-none">
                        Daftar Akun Baru (/register)
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

