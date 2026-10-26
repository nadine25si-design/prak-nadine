@extends('layouts.guest')

@section('title', 'Home - Laundry Kita')

@section('content')
<!-- Hero Section -->
<section class="hero-section text-center text-lg-start">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-7">
                <span class="badge bg-warning text-dark px-3 py-2 rounded-pill fw-semibold mb-3">
                    <i class="bi bi-stars me-1"></i> Layanan Laundry Terbaik di Rumbai
                </span>
                <h1 class="display-4 fw-bold mb-3">
                    Pakaian Bersih, Harum, & Rapi Tanpa Ribet
                </h1>
                <p class="lead mb-4 text-white-50">
                    Laundry Kita menyediakan layanan cuci komplit, dry cleaning, setrika kilat, dan antar-jemput langsung ke rumah atau kos Anda.
                </p>
                <div class="d-flex flex-wrap gap-3 justify-content-center justify-content-lg-start">
                    <a href="{{ url('/pesan-laundry') }}" class="btn btn-warning btn-lg px-4 fw-bold shadow-sm">
                        <i class="bi bi-cart-plus me-1"></i> Pesan Laundry Sekarang
                    </a>
                    <a href="{{ route('login') }}" class="btn btn-outline-light btn-lg px-4 fw-semibold">
                        <i class="bi bi-box-arrow-in-right me-1"></i> Masuk / Login
                    </a>
                </div>
            </div>
            <div class="col-lg-5 text-center">
                <div class="bg-white bg-opacity-10 p-4 rounded-4 border border-light border-opacity-25 shadow">
                    <i class="bi bi-shield-check text-warning display-1 mb-3 d-block"></i>
                    <h4 class="fw-bold text-white mb-2">Higienis & Terjamin</h4>
                    <p class="text-white-70 small mb-3">
                        1 Mesin Cuci khusus untuk 1 Pelanggan. Menggunakan deterjen premium ramah serat kain dan pewangi tahan lama hingga 14 hari.
                    </p>
                    <div class="d-flex justify-content-around text-center pt-2 border-top border-white border-opacity-25">
                        <div>
                            <h5 class="fw-bold mb-0 text-white">5.000+</h5>
                            <small class="text-white-50">Pelanggan</small>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-0 text-white">99%</h5>
                            <small class="text-white-50">Puas</small>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-0 text-white">1 Hari</h5>
                            <small class="text-white-50">Express</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Layanan Unggulan -->
<section class="py-5">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h6 class="text-primary fw-bold text-uppercase letter-spacing-1">Layanan Kami</h6>
            <h2 class="fw-bold">Pilihan Paket Cuci Hemat & Praktis</h2>
            <p class="text-muted">Pilih paket sesuai kebutuhan aktivitas dan rutinitas harian Anda.</p>
        </div>

        <div class="row g-4">
            <!-- Layanan 1 -->
            <div class="col-md-4">
                <div class="card card-custom h-100 p-4 bg-white border">
                    <div class="d-inline-flex align-items-center justify-content-center bg-primary bg-opacity-10 text-primary rounded-3 p-3 mb-4" style="width: 60px; height: 60px;">
                        <i class="bi bi-basket3 fs-3"></i>
                    </div>
                    <h5 class="fw-bold mb-2">Cuci Komplit</h5>
                    <p class="text-muted small mb-3">
                        Mencakup proses cuci, pengeringan mesin, dan setrika uap rapi. Siap langsung pakai.
                    </p>
                    <span class="fw-bold text-primary fs-5 mt-auto">Mulai Rp 6.000 / Kg</span>
                </div>
            </div>

            <!-- Layanan 2 -->
            <div class="col-md-4">
                <div class="card card-custom h-100 p-4 bg-white border">
                    <div class="d-inline-flex align-items-center justify-content-center bg-success bg-opacity-10 text-success rounded-3 p-3 mb-4" style="width: 60px; height: 60px;">
                        <i class="bi bi-lightning-charge fs-3"></i>
                    </div>
                    <h5 class="fw-bold mb-2">Express 1 Hari</h5>
                    <p class="text-muted small mb-3">
                        Layanan kilat selesai dalam hitungan jam untuk kebutuhan mendesak pakaian dinas atau kuliah.
                    </p>
                    <span class="fw-bold text-success fs-5 mt-auto">Mulai Rp 10.000 / Kg</span>
                </div>
            </div>

            <!-- Layanan 3 -->
            <div class="col-md-4">
                <div class="card card-custom h-100 p-4 bg-white border">
                    <div class="d-inline-flex align-items-center justify-content-center bg-warning bg-opacity-10 text-warning rounded-3 p-3 mb-4" style="width: 60px; height: 60px;">
                        <i class="bi bi-truck fs-3"></i>
                    </div>
                    <h5 class="fw-bold mb-2">Antar Jemput Gratis</h5>
                    <p class="text-muted small mb-3">
                        Kurir kami siap menjemput cucian kotor ke tempat Anda dan mengantarkannya kembali setelah rapi.
                    </p>
                    <span class="fw-bold text-warning fs-5 mt-auto">Free Radius 3 KM</span>
                </div>
            </div>
        </div>

        <!-- Info Card Quiz Pertemuan 8 -->
        <div class="mt-5 p-4 rounded-4 bg-primary bg-opacity-10 border border-primary border-opacity-25">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h5 class="fw-bold text-primary mb-1">
                        <i class="bi bi-check2-circle me-1"></i> Halaman Tampilan Guest dengan PartialView
                    </h5>
                    <p class="text-muted mb-lg-0 small">
                        Halaman ini menggunakan Layout Guest master (<code>layouts/guest.blade.php</code>) yang menyertakan Partial Views (<code>layouts/partials/navbar.blade.php</code> &amp; <code>layouts/partials/footer.blade.php</code>).
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="{{ route('login') }}" class="btn btn-primary fw-semibold me-2">
                        Halaman Login (/auth)
                    </a>
                    <a href="{{ route('register') }}" class="btn btn-outline-primary fw-semibold">
                        Register (/register)
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

