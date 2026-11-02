<!-- Partial View: Daftar Paket Laundry (Query Builder Data) -->
<section id="paket-laundry" class="services-area pt-top border-bottom pb-50 mb-60 bg-light" style="padding-top: 70px; padding-bottom: 60px;">
    <div class="container">
        <!-- Section Title (Styling Sesuai Template Asli) -->
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-9">
                <div class="section-tittle text-center mb-50">
                    <span class="element">PAKET & TARIF</span>
                    <h2>Pilihan Paket Laundry Terbaik</h2>
                    <p class="text-muted" style="max-width: 620px; margin: 10px auto 0; font-size: 15px;">
                        Pilih paket cucian hemat dan berkualitas sesuai kebutuhan aktivitas harian Anda. Bersih, wangi, rapi, dan terpercaya.
                    </p>
                </div>
            </div>
        </div>

        <!-- Grid Daftar Paket -->
        <div class="row">
            @forelse($packages as $pkg)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden" style="transition: transform 0.3s ease, box-shadow 0.3s ease; border-radius: 16px;">
                        <!-- Header Kartu Paket -->
                        <div class="card-header bg-white border-0 pt-4 px-4 pb-0">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="badge px-3 py-2 rounded-pill fw-semibold" style="background-color: #eef2ff; color: #4361ee; font-size: 12px; border: 1px solid #d0dbff;">
                                    <i class="bi {{ $pkg->category_icon ?? 'bi-tag-fill' }} me-1"></i>
                                    {{ $pkg->category_name ?? 'Layanan Laundry' }}
                                </span>
                                <span class="badge bg-light text-muted border small px-2 py-1">
                                    <i class="bi bi-clock me-1"></i>{{ $pkg->duration }}
                                </span>
                            </div>
                            <h4 class="fw-bold mb-1" style="color: #072366; font-size: 20px;">{{ $pkg->name }}</h4>
                        </div>

                        <!-- Body Kartu Paket -->
                        <div class="card-body px-4 py-3 d-flex flex-column">
                            <div class="mb-3">
                                <span class="display-6 fw-bold text-primary" style="color: #6480ff !important; font-size: 28px;">
                                    Rp {{ number_format($pkg->price, 0, ',', '.') }}
                                </span>
                                <span class="text-muted small">/ {{ $pkg->unit }}</span>
                            </div>

                            <p class="text-muted small mb-4 flex-grow-1" style="line-height: 1.6;">
                                {{ $pkg->description ?? 'Layanan pencucian pakaian profesional dengan jaminan kebersihan dan keharuman optimal.' }}
                            </p>

                            <!-- Tombol Pesan Langsung ke Form -->
                            <a href="#form-pemesanan" class="btn w-100 py-3 fw-semibold text-center rounded-3" style="font-size: 14px; text-transform: uppercase; letter-spacing: 1px;">
                                Pesan Paket Ini
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center py-4">
                    <p class="text-muted">Paket laundry sedang dalam pembaruan.</p>
                </div>
            @endforelse
        </div>
    </div>
</section>

