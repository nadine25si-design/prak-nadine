<footer class="bg-dark text-white pt-5 pb-4 mt-auto">
    <div class="container">
        <div class="row g-4">
            <!-- Brand & Deskripsi -->
            <div class="col-lg-4 col-md-6">
                <h5 class="fw-bold d-flex align-items-center gap-2 mb-3">
                    <i class="bi bi-droplet-half text-primary"></i> Laundry Kita
                </h5>
                <p class="text-white-50 small mb-3">
                    Layanan jasa cuci pakaian, setrika kilat, dan laundry express terpercaya. Pakaian bersih, wangi, higienis, dan siap pakai setiap hari.
                </p>
                <div class="d-flex gap-3 fs-5">
                    <a href="#" class="text-white-50 hover-text-white"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="text-white-50 hover-text-white"><i class="bi bi-instagram"></i></a>
                    <a href="https://wa.me/6281365649826" class="text-white-50 hover-text-white" target="_blank"><i class="bi bi-whatsapp"></i></a>
                </div>
            </div>

            <!-- Navigasi Cepat -->
            <div class="col-lg-2 col-md-6">
                <h6 class="fw-bold text-uppercase mb-3">Halaman</h6>
                <ul class="list-unstyled small">
                    <li class="mb-2"><a href="{{ url('/') }}" class="text-white-50 text-decoration-none">Home</a></li>
                    <li class="mb-2"><a href="{{ route('login') }}" class="text-white-50 text-decoration-none">Login (/auth)</a></li>
                    <li class="mb-2"><a href="{{ route('register') }}" class="text-white-50 text-decoration-none">Register (/register)</a></li>
                    <li class="mb-2"><a href="{{ url('/pesan-laundry') }}" class="text-white-50 text-decoration-none">Pesan Laundry</a></li>
                </ul>
            </div>

            <!-- Jam Operasional -->
            <div class="col-lg-3 col-md-6">
                <h6 class="fw-bold text-uppercase mb-3">Jam Operasional</h6>
                <ul class="list-unstyled small text-white-50">
                    <li class="mb-2 d-flex justify-content-between">
                        <span>Senin - Sabtu:</span>
                        <span class="text-white">07.00 - 21.00 WIB</span>
                    </li>
                    <li class="mb-2 d-flex justify-content-between">
                        <span>Minggu:</span>
                        <span class="text-white">08.00 - 18.00 WIB</span>
                    </li>
                    <li class="mb-2">
                        <span class="badge bg-success">Buka Setiap Hari</span>
                    </li>
                </ul>
            </div>

            <!-- Kontak -->
            <div class="col-lg-3 col-md-6">
                <h6 class="fw-bold text-uppercase mb-3">Kontak & Lokasi</h6>
                <p class="text-white-50 small mb-2">
                    <i class="bi bi-geo-alt-fill text-danger me-2"></i>
                    Jl. Rowo Sari No. 11, Rumbai, Pekanbaru, Riau
                </p>
                <p class="text-white-50 small mb-2">
                    <i class="bi bi-telephone-fill text-primary me-2"></i>
                    0813-6564-9826
                </p>
                <p class="text-white-50 small mb-0">
                    <i class="bi bi-envelope-fill text-warning me-2"></i>
                    info@laundrykita.id
                </p>
            </div>
        </div>

        <hr class="border-secondary my-4">

        <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-start small text-white-50">
                &copy; {{ date('Y') }} Laundry Kita. Praktikum Pemrograman Framework - Nadine.
            </div>
            <div class="col-md-6 text-center text-md-end small text-white-50 mt-2 mt-md-0">
                PartialView Guest Layout &middot; Sistem Informasi PCR
            </div>
        </div>
    </div>
</footer>

