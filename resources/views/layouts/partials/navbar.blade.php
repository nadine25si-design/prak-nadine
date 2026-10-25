<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm mb-4">
    <div class="container">
        <a class="navbar-brand font-weight-bold" href="/">Laundry Kita</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-navbar nav me-auto ms-auto">
                <li class="nav-item"><a class="nav-link active" href="/">Beranda</a></li>
                <li class="nav-item"><a class="nav-link" href="#about">Tentang Kami</a></li>
                <li class="nav-item"><a class="nav-link" href="#services">Layanan</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Kontak</a></li>
            </ul>
            <div>
                <a href="{{ route('question.store') }}" class="btn btn-primary">Pesan Laundry / Tanya</a>
            </div>
        </div>
    </div>
</nav>