<footer>
    <div class="footer-area footer-padding">
        <div class="container">
            <div class="row">

                <!-- Logo dan Deskripsi -->
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <div class="single-footer-caption mb-50">
                        <div class="footer-logo mb-25">
                            <a href="{{ url('/') }}">
                                <img
                                    src="{{ asset('assets/img/logo/logo laundry_kita.png') }}"
                                    alt="Laundry Kita"
                                    style="width: 200px; height: auto;">
                            </a>
                        </div>

                        <div class="footer-tittle">
                            <div class="footer-pera">
                                <p>
                                    Laundry Kita menyediakan layanan laundry
                                    yang praktis, bersih, dan terpercaya.
                                    Clean, Fast & Professional.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Menu Layanan -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-caption mb-50">
                        <div class="footer-tittle">
                            <h4>Layanan Kami</h4>
                            <ul>
                                <li><a href="{{ url('/#form-pemesanan') }}">Cuci Komplit (Cuci + Kering + Setrika)</a></li>
                                <li><a href="{{ url('/#form-pemesanan') }}">Cuci Lipat (Tanpa Setrika)</a></li>
                                <li><a href="{{ url('/#form-pemesanan') }}">Setrika Saja</a></li>
                                <li><a href="{{ url('/#form-pemesanan') }}">Laundry Satuan (Jas, Gaun, Bedcover, dll)</a></li>
                                <li><a href="{{ url('/#form-pemesanan') }}">Dry Cleaning / Cuci Kering</a></li>
                                <li><a href="{{ url('/#form-pemesanan') }}">Perawatan Sepatu & Tas</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Kontak dan Alamat -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-footer-caption mb-50">
                        <div class="footer-tittle">
                            <h4>Hubungi Kami</h4>
                            <ul>
                                <li>
                                    <a href="https://wa.me/6281365649826"
                                       target="_blank"
                                       rel="noopener noreferrer">
                                        WhatsApp: 0823-8443-2421
                                    </a>
                                </li>
                                <li>
                                    <a href="tel:082384432421">
                                        Telepon: 0823-8443-2421
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.google.com/maps/search/?api=1&query=Jl.%20Rowo%20Sari%20No.11%2C%20Umban%20Sari%2C%20Rumbai%2C%20Kota%20Pekanbaru%2C%20Riau%2028266"
                                       target="_blank"
                                       rel="noopener noreferrer">
                                        Jl. Rowo Sari No.11, Umban Sari,
                                        Rumbai, Pekanbaru, Riau 28266
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('/#location') }}">Lihat Lokasi di Peta</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Footer Bawah -->
    <div class="footer-bottom-area section-bg2">
        <div class="container">
            <div class="footer-border">
                <div class="row">
                    <div class="col-12">
                        <div class="footer-copy-right text-center">
                            <p>
                                &copy; {{ date('Y') }} Laundry Kita.
                                Clean, Fast & Professional.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
