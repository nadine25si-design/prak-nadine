<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laundry Kita</title>

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/progressbar_barfiller.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/gijgo.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animated-headline.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{ asset('assets/img/logo/loder.png') }}" alt="">               
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header header-sticky">
    <div class="header-left">
        <div class="logo">
            <a href="{{ url('/') }}">
                <img src="{{ asset('assets/img/logo/logo laundry_kita.png') }}"
                     alt="Logo Laundry Kita"
                     style="width: 180px; height: auto;">
            </a>
        </div>

        <div class="menu-wrapper d-flex align-items-center">
            <!-- Main-menu -->
            <div class="main-menu d-none d-lg-block">
                            <nav> 
                                <ul id="navigation">                                                                                          
                                    <li class="active"><a href="index.html">Home</a></li>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="services.html">Services</a></li>
                                    <li><a href="blog.html">Blog</a>
                                        <ul class="submenu">
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="blog_details.html">Blog Details</a></li>
                                            <li><a href="elements.html">Element</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div> 
                <div class="header-right d-none d-lg-block">
                    
<a href="https://wa.me/6281365649826"
   class="header-btn1"
   target="_blank"
   rel="noopener noreferrer">
    <img src="{{ asset('assets/img/icon/call.png') }}" alt="">
    WhatsApp
</a>

<a href="tel:082384432421" class="header-btn1">
    Telepon
</a>


<a href="#form-pemesanan" class="header-btn2">
    Pesan Laundry
</a>
                </div>
                <!-- Mobile Menu -->
                <div class="col-12">
                    <div class="mobile_menu d-block d-lg-none"></div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <main>
        <!--? slider Area Start-->
        <section class="slider-area hero-overly">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-7 col-lg-9 col-md-10 col-sm-9">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInLeft" data-delay="0.2s"
    style="font-family: inherit; font-size: 46px; line-height: 1.2; font-weight: 600;">
    Laundry Kita, Clean Clothes, Happy You!
</h1>

<p data-animation="fadeInLeft" data-delay="0.4s"
   style="font-family: inherit; font-size: 18px; line-height: 1.6; max-width: 580px;">
    Layanan laundry praktis, bersih, dan terpercaya.
    Kami merawat pakaianmu agar selalu bersih, wangi, dan siap digunakan.
</p>
                                    <a href="#" class="btn hero-btn" data-animation="fadeInLeft" data-delay="0.7s">Explore Services</a>
                                </div>
                            </div>
                        </div>
                    </div>          
                </div>
            </div>
        </section>
        <!-- slider Area End-->
        <!--? Services Area Start -->
        <section id="services" class="services-area pt-top border-bottom pb-20 mb-60">            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">
                            <span class="element">Cara Kerja Laundry Kita</span>
                            <h2>Praktis dari Awal hingga Selesai</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center">
                            <div class="cat-icon">
                                <img src="{{ asset('assets/img/icon/services-icon1.svg') }}" alt="">                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">Pilih Layanan Laundry</a></h5>
                                <p>Pilih layanan kiloan atau satuan sesuai kebutuhanmu.</p>                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center">
                            <div class="cat-icon">
                                <img src="{{ asset('assets/img/icon/services-icon2.svg') }}" alt="">                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">Pesan & Jadwalkan</a></h5>
                                <p>Isi formulir pesanan dan tentukan alamat serta jadwal penjemputan.</p>                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center">
                            <div class="cat-icon">
                                <img src="{{ asset('assets/img/icon/services-icon3.svg') }}" alt="">                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">Lacak Pesanan</a></h5>
                                <p>Pantau status cucianmu hingga selesai dan siap diantar.</p>                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services End -->
        

<!-- Offer-services Start -->
<section class="offer-services pb-bottom2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-8">
                <div class="section-tittle text-center mb-55">
                    <span class="element">LAYANAN KAMI</span>
                    <h2>Layanan Laundry Kita</h2>
                </div>
            </div>
        </div>

        <div class="row no-gutters laundry-services">

            <!-- Baris 1: Foto Laundry Kiloan -->
            <div class="col-lg-6 col-md-6">
                <div class="service-photo">
                    <img src="{{ asset('assets/img/gallery/offers1.png') }}"
                         alt="Laundry Kiloan">
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="service-info">
                    <div>
                        <img class="service-icon"
                             src="{{ asset('assets/img/icon/offers-icon1.png') }}"
                             alt="">
                        <h3>Laundry Kiloan</h3>
                        <p>Pakaianmu dicuci dengan teliti agar bersih, wangi, dan nyaman digunakan kembali.</p>
                    </div>
                </div>
            </div>

            <!-- Baris 2: Kotak Biru dan Foto Setrika -->
            <div class="col-lg-6 col-md-6 order-2 order-lg-3">
                <div class="service-info">
                    <div>
                        <img class="service-icon"
                             src="{{ asset('assets/img/icon/offers-icon1.png') }}"
                             alt="">
                        <h3>Setrika Pakaian</h3>
                        <p>Pakaian disetrika dengan rapi agar siap digunakan dan terlihat lebih terawat.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 order-3 order-lg-4">
                <div class="service-photo">
                    <img src="{{ asset('assets/img/gallery/offers4.png') }}"
                    alt="Setrika Pakaian"
                    style="object-position: center 65%;">
                </div>
            </div>

            <!-- Baris 3: Foto Antar Jemput dan Kotak Biru -->
            <div class="col-lg-6 col-md-6 order-4 order-lg-5">
                <div class="service-photo">
                    <img src="{{ asset('assets/img/gallery/antar-jemput.png') }}"
                         alt="Kurir mengantar pakaian laundry">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 order-5 order-lg-6">
                <div class="service-info">
                    <div>
                        <img class="service-icon"
                             src="{{ asset('assets/img/icon/offers-icon1.png') }}"
                             alt="">
                        <h3>Antar Jemput Laundry</h3>
                        <p>Cucian dijemput dan diantar kembali agar lebih praktis dan hemat waktu.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Offer-services End -->

<style>

.laundry-services {
    display: flex;
    flex-wrap: wrap;
    width: 100%;
    overflow: hidden;
}

.laundry-services > .col-lg-6 {
    flex: 0 0 50%;
    width: 50%;
    max-width: 50%;
    padding: 0;
}


.laundry-services .service-photo,
.laundry-services .service-info {
    width: 100%;
    height: 390px;
}

.laundry-services .service-photo {
    overflow: hidden;
}

.laundry-services .service-photo img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
}

/* Geser fokus foto setrika */
.laundry-services .col-lg-6:nth-child(4) .service-photo img {
    object-position: center 65%;
}

.laundry-services .service-info {
    background-color: #6480ff;
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    padding: 35px;
    box-sizing: border-box;
}

.laundry-services .service-info h3 {
    color: #fff;
    font-size: 25px;
    font-weight: 600;
    margin: 20px 0 15px;
}

.laundry-services .service-info p {
    color: #fff;
    font-size: 16px;
    line-height: 1.8;
    max-width: 400px;
    margin: 0 auto;
}

.laundry-services .service-icon {
    width: 65px;
    height: 65px;
    object-fit: contain;
}

@media (max-width: 767px) {
    .laundry-services > .col-lg-6 {
        flex: 0 0 100%;
        width: 100%;
        max-width: 100%;
    }

    .laundry-services .service-photo,
    .laundry-services .service-info {
        height: 300px;
    }

    .laundry-services .service-info {
        padding: 20px;
    }

    .laundry-services .service-info h3 {
        font-size: 21px;
    }

    .laundry-services .service-info p {
        font-size: 14px;
    }
}

</style>

        <!--? Want To work -->
        <section class="container">
            <section class="wantToWork-area" data-background="{{ asset('assets/img/gallery/section_bg01.png') }}">                
                <div class="wants-wrapper w-padding2">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-xl-8 col-lg-9 col-md-7">
                            <div class="wantToWork-caption wantToWork-caption2">
                                <h2>Butuh Laundry? Hubungi Kami!</h2>                                
                                <p>Pesan layanan laundry dengan mudah dan praktis melalui WhatsApp.</p>                            
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-5">
                            <a href="https://wa.me/6281365649826"
                            class="btn wantToWork-btn"
                            target="_blank"
                            rel="noopener noreferrer">
                            <img src="{{ asset('assets/img/icon/call2.png') }}" alt="">
                            Hubungi WhatsApp
                        </a>
                        </div>
                    </div>
                </div>
            </section>
        </section>
        <!-- Want To work End -->
        <!-- Testimonials_end -->
        <!--? Company achievement Start -->
        <section class="services-area section-padding40 fix">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">
                            <span class="element">PENCAPAIAN KAMI</span>
                            <h2>Komitmen Laundry Kita</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center">
                            <div class="cat-cap">
                                <span>Bersih</span>
                                <p>Pakaian pelanggan telah dicuci dengan bersih dan teliti.</p>                            
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center">
                            <div class="cat-cap">
                                <span>Praktis</span>
                                <p>Lebih dari 300 pelanggan telah mempercayakan cucian mereka kepada kami.</p>                            
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center">
                            <div class="cat-cap">
                                <span>Terpercaya</span>
                                <p>Kami berkomitmen memberikan hasil laundry yang bersih dan memuaskan.</p>                            
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="bottom-bt">
                                <img src="assets/img/gallery/company-bg.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Company achievement End -->
        <!--? About Area  -->
        <section class="about-area2 pb-bottom mt-30">
            <div class="container">
                <div class="row align-items-center">
                    
<div class="col-lg-6 col-md-12">
    <div class="about-img">
        <img src="{{ asset('assets/img/gallery/laundry-about.png') }}"
             alt="Aktivitas mencuci dan melipat pakaian di Laundry Kita">
    </div>
</div>

<div class="col-lg-6 col-md-12">
    <div class="about-caption mb-50">

                            <!-- Section Tittle -->
                            <div class="section-tittle mb-25">
                                <h2>Tentang Laundry Kita</h2>
                            </div>
                            <p class="mb-20">
                                Laundry Kita hadir untuk memberikan layanan laundry yang praktis,
                                bersih, dan terpercaya. Kami membantu merawat pakaianmu agar tetap
                                bersih, wangi, dan nyaman digunakan.
                            </p>
                            <p class="mb-30">
                                Nikmati kemudahan pemesanan, penjadwalan penjemputan, dan pemantauan
                                status cucian dalam satu layanan.
                            </p>
                            <a href="#services" class="btn">Lihat Layanan</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area End -->
        <!--?  Map Area start  -->
        
<!-- Form Pemesanan Laundry -->
<section id="form-pemesanan" class="order-section">
    <div class="container">
        <div class="order-heading">
    <span>PEMESANAN</span>
    <h2>Pesan Laundry Sekarang</h2>
    <p>Isi detail pesananmu, kami siap membantu!</p>
</div>

{{-- Alert Notifikasi Sukses --}}
@if(session('success'))
    <div style="background-color: #d1e7dd; color: #0f5132; border: 2px solid #0f5132; padding: 15px 20px; border-radius: 8px; margin-bottom: 20px; font-weight: bold; font-size: 16px; text-align: center;">
        ✅ {{ session('success') }}
    </div>
@endif

<form id="laundryOrderForm" class="order-form bg-white p-4 p-md-5 rounded-4 shadow-sm" action="{{ route('pesanan.store') }}" method="POST">
    @csrf

    <div class="row g-3">
        <!-- Nama Lengkap -->
        <div class="col-md-6 mb-2">
            <label for="nama" class="form-label fw-semibold">Nama Lengkap</label>
            <input type="text" id="nama" name="name" class="form-control" placeholder="Masukkan nama lengkap" required>
        </div>

        <!-- Nomor WhatsApp -->
        <div class="col-md-6 mb-2">
            <label for="whatsapp" class="form-label fw-semibold">Nomor WhatsApp</label>
            <input type="tel" id="whatsapp" name="whatsapp" class="form-control" placeholder="Contoh: 0823xxxxxxxx" required>
        </div>

        <!-- Jenis Layanan -->
        <div class="col-md-6 mb-2">
            <label for="service" class="form-label fw-semibold">Jenis Layanan</label>
            <select class="form-select" id="service" name="service" required>
                <option value="">-- Pilih Layanan Laundry --</option>
                <option value="Cuci Komplit (Cuci + Kering + Setrika)">Cuci Komplit (Cuci + Kering + Setrika)</option>
                <option value="Cuci Lipat (Tanpa Setrika)">Cuci Lipat (Tanpa Setrika)</option>
                <option value="Setrika Saja">Setrika Saja</option>
                <option value="Laundry Satuan (Jas, Gaun, Bedcover, dll)">Laundry Satuan (Jas, Gaun, Bedcover, dll)</option>
                <option value="Dry Cleaning / Cuci Kering">Dry Cleaning / Cuci Kering</option>
                <option value="Perawatan Sepatu & Tas">Perawatan Sepatu & Tas</option>
            </select>
        </div>

        <!-- Tanggal Penjemputan -->
        <div class="col-md-6 mb-2">
            <label for="tanggal" class="form-label fw-semibold">Tanggal Penjemputan</label>
            <input type="date" id="tanggal" name="pickup_date" class="form-control" required>
        </div>

        <!-- Alamat Penjemputan -->
        <div class="col-12 mb-2">
            <label for="alamat" class="form-label fw-semibold">Alamat Penjemputan</label>
            <textarea id="alamat" name="address" class="form-control" rows="3" placeholder="Masukkan alamat lengkap" required></textarea>
        </div>

        <!-- Dropdown Pilih Metode Pembayaran -->
        <div class="col-12 mb-2">
            <label for="paymentMethodSelect" class="form-label fw-semibold">Metode Pembayaran</label>
            <select name="payment_method" id="paymentMethodSelect" class="form-select" onchange="toggleQrisImage()">
                <option value="Tunai / Cash" selected>Tunai / Cash</option>
                <option value="QRIS / E-Wallet">QRIS / E-Wallet</option>
                <option value="Transfer Bank">Transfer Bank</option>
            </select>
        </div>

        <!-- Gambar QRIS (Awalnya tersembunyi) -->
        <div class="col-12 mb-2 text-center d-none" id="qrisContainer">
            <p class="fw-bold mb-2 text-dark"><i class="bi bi-qr-code-scan me-1"></i> Scan QRIS untuk Pembayaran</p>
            <img src="{{ asset('assets/images/qris.jpg') }}" alt="QRIS Laundry Kita" class="img-fluid rounded border shadow-sm" style="max-width: 220px;">
            <p class="small text-muted mt-2 mb-0">Mendukung GoPay, OVO, Dana, ShopeePay, & Mobile Banking</p>
        </div>

        <!-- Tombol Simpan Pesanan -->
        <div class="col-12 mt-4 text-center">
            <button type="submit" class="btn btn-primary w-100 py-3 rounded-3 fw-bold fs-5 shadow-sm">Simpan Pesanan</button>
        </div>

    </div> <!-- Penutup row -->
</form> <!-- Penutup form -->
</section> <!-- Penutup Section -->

<style>
.order-section {
    padding: 75px 0;
    background: #f5f9fc;
}
.order-heading {
    text-align: center;
    margin-bottom: 35px;
}
.order-heading span {
    color: #6480ff;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 2px;
}
.order-heading h2 {
    color: #001f3f;
    font-size: 32px;
    font-weight: 700;
    margin: 12px 0;
}
.order-heading p {
    color: #64748b;
}
.order-form {
    max-width: 800px;
    margin: auto;
    padding: 32px;
    background: #fff;
    border-radius: 16px;
    box-shadow: 0 8px 30px rgba(0,31,63,.07);
}
.order-form label {
    display: block;
    margin-bottom: 8px;
    color: #001f3f;
    font-weight: 600;
}
.order-form .form-control {
    min-height: 46px;
    border: 1px solid #dce4ef;
    border-radius: 8px;
}
.order-form textarea.form-control {
    height: auto;
}
.order-button {
    border: 0;
    border-radius: 8px;
    padding: 14px 24px;
    background: #6480ff;
    color: #fff;
    font-weight: 600;
    cursor: pointer;
}
.order-button:hover {
    background: #001f3f;
}
@media (max-width: 576px) {
    .order-form {
        padding: 20px;
    }
    .order-heading h2 {
        font-size: 26px;
    }
}
</style>

<script>
function toggleQrisImage() {
    const selectElement = document.getElementById('paymentMethodSelect');
    const qrisContainer = document.getElementById('qrisContainer');
    
    if (selectElement && qrisContainer) {
        if (selectElement.value === 'QRIS / E-Wallet') {
            qrisContainer.classList.remove('d-none');
        } else {
            qrisContainer.classList.add('d-none');
        }
    }
}
</script>

<script>
document.getElementById('laundryOrderForm').addEventListener('submit', function () {
    const nama = document.getElementById('nama').value.trim();
    const whatsapp = document.getElementById('whatsapp').value.trim();
    const layanan = document.getElementById('layanan').value;
    const tanggal = document.getElementById('tanggal').value;
    const alamat = document.getElementById('alamat').value.trim();

    const pesan = `Halo Laundry Kita, saya ingin memesan layanan laundry.

Nama: ${nama}
Nomor WhatsApp: ${whatsapp}
Layanan: ${layanan}
Tanggal penjemputan: ${tanggal}
Alamat: ${alamat}`;

    sessionStorage.setItem('pesanLaundryWhatsApp', pesan);
});
</script>

<!-- Form Pemesanan End -->

        <section id="location" class="location-section">    <div class="container">
        <div class="location-heading">
            <span class="location-label">TEMUKAN KAMI</span>
            <h2>Lokasi Laundry Kita</h2>
            <p>
                Kami siap membantu pakaianmu tetap bersih, wangi,
                dan nyaman digunakan.
            </p>
        </div>

        <div class="location-card">
            <div class="location-info">
                <div class="location-icon">⌖</div>
                <div>
                    <h4>Kunjungi Laundry Kita</h4>
                    <p>
                        Jl. Rowo Sari No.11, Umban Sari, Rumbai,
                        Kota Pekanbaru, Riau 28266
                    </p>
                </div>
                <a
                    href="https://www.google.com/maps/search/?api=1&query=Jl.%20Rowo%20Sari%20No.11%2C%20Umban%20Sari%2C%20Rumbai%2C%20Kota%20Pekanbaru%2C%20Riau%2028266"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="location-button">
                    Buka Google Maps ↗
                </a>
            </div>

            <div class="location-map">
                <iframe
                    src="https://maps.google.com/maps?q=Jl.%20Rowo%20Sari%20No.11%2C%20Umban%20Sari%2C%20Rumbai%2C%20Kota%20Pekanbaru%2C%20Riau%2028266&output=embed"
                    width="100%"
                    height="100%"
                    style="border:0;"
                    loading="lazy"
                    allowfullscreen>
                </iframe>
            </div>
        </div>
    </div>
</section>

<style>
.location-section {
    padding: 80px 0;
    background: #f5f9fc;
}

.location-heading {
    text-align: center;
    margin-bottom: 38px;
}

.location-label {
    display: inline-block;
    color: #00a8e8;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 3px;
    margin-bottom: 12px;
}

.location-heading h2 {
    color: #001f3f;
    font-size: 34px;
    font-weight: 700;
    margin-bottom: 14px;
}

.location-heading p {
    color: #64748b;
    font-size: 15px;
    margin-bottom: 0;
}

.location-card {
    display: grid;
    grid-template-columns: 0.8fr 1.2fr;
    background: #fff;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 12px 40px rgba(0, 31, 63, 0.08);
}

.location-info {
    padding: 40px 32px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: center;
}

.location-icon {
    width: 48px;
    height: 48px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 14px;
    background: #e8f7fd;
    color: #00a8e8;
    font-size: 30px;
    margin-bottom: 24px;
}

.location-info h4 {
    color: #001f3f;
    font-size: 21px;
    font-weight: 700;
    margin-bottom: 14px;
}

.location-info p {
    color: #64748b;
    font-size: 14px;
    line-height: 1.9;
    margin-bottom: 24px;
}

.location-button {
    display: inline-block;
    background: #00a8e8;
    color: #fff !important;
    padding: 13px 22px;
    border-radius: 9px;
    font-size: 14px;
    font-weight: 600;
    text-decoration: none;
    transition: 0.2s;
}

.location-button:hover {
    background: #001f3f;
    color: #fff;
}

.location-map {
    min-height: 380px;
}

.location-map iframe {
    display: block;
    min-height: 380px;
}

@media (max-width: 767px) {
    .location-section {
        padding: 55px 0;
    }

    .location-heading h2 {
        font-size: 27px;
    }

    .location-card {
        grid-template-columns: 1fr;
    }

    .location-info {
        padding: 28px 24px;
    }

    .location-map,
    .location-map iframe {
        min-height: 300px;
    }
}

/* Tombol kontak di header */
.header-btn1 {
    white-space: nowrap;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 6px;
    margin-left: 8px;
}

</style>


        <!-- Map Area End -->
    </main>
    
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
                                <li><a href="#form-pemesanan">Cuci Komplit (Cuci + Kering + Setrika)</a></li>
                                <li><a href="#form-pemesanan">Cuci Lipat (Tanpa Setrika)</a></li>
                                <li><a href="#form-pemesanan">Setrika Saja</a></li>
                                <li><a href="#form-pemesanan">Laundry Satuan (Jas, Gaun, Bedcover, dll)</a></li>
                                <li><a href="#form-pemesanan">Dry Cleaning / Cuci Kering</a></li>
                                <li><a href="#form-pemesanan">Perawatan Sepatu & Tas</a></li>
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
            </ul>
        </div>
    </div>
</div>
                            <ul>
                                <li>
                                    <a href="https://www.google.com/maps/search/?api=1&query=Jl.%20Rowo%20Sari%20No.11%2C%20Umban%20Sari%2C%20Rumbai%2C%20Kota%20Pekanbaru%2C%20Riau%2028266"
                                       target="_blank"
                                       rel="noopener noreferrer">
                                        Jl. Rowo Sari No.11, Umban Sari,
                                        Rumbai, Pekanbaru, Riau 28266
                                    </a>
                                </li>
                                <li>
                                    <a href="#location">Lihat Lokasi di Peta</a>
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

<!-- Scroll Up -->
<div id="back-top" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

<!-- JS here -->

<script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<!-- Jquery Mobile Menu -->
<script src="{{ asset('assets/js/jquery.slicknav.min.js') }}"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/slick.min.js') }}"></script>

<!-- One Page, Animated-HeadLin -->
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/js/animated.headline.js') }}"></script>
<script src="{{ asset('assets/js/jquery.magnific-popup.js') }}"></script>

<!-- Date Picker -->
<script src="{{ asset('assets/js/gijgo.min.js') }}"></script>

<!-- Nice-select, sticky -->
<script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>

<!-- Progress -->
<script src="{{ asset('assets/js/jquery.barfiller.js') }}"></script>

<!-- counter, waypoint, Hover Direction -->
<script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('assets/js/hover-direction-snake.min.js') }}"></script>

<!-- contact js -->
<script src="{{ asset('assets/js/contact.js') }}"></script>
<script src="{{ asset('assets/js/jquery.form.js') }}"></script>
<script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('assets/js/mail-script.js') }}"></script>
<script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>

<!-- Jquery Plugins, main Jquery -->
<script src="{{ asset('assets/js/plugins.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script></body>
</html>