<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm sticky-top">
    <div class="container">
        <!-- Logo & Brand -->
        <a class="navbar-brand d-flex align-items-center gap-2 fw-bold" href="{{ url('/') }}">
            <i class="bi bi-droplet-half fs-4"></i>
            <span>Laundry Kita</span>
        </a>

        <!-- Mobile Toggle Button -->
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarGuestContent" aria-controls="navbarGuestContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Links -->
        <div class="collapse navbar-collapse" id="navbarGuestContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-3">
                <li class="nav-item">
                    <a class="nav-link text-white {{ Request::is('/') ? 'active fw-bold border-bottom border-2 border-white' : 'opacity-75' }}" href="{{ url('/') }}">
                        <i class="bi bi-house-door me-1"></i> Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white {{ Request::is('pesan-laundry*') ? 'active fw-bold border-bottom border-2 border-white' : 'opacity-75' }}" href="{{ url('/pesan-laundry') }}">
                        <i class="bi bi-bag-plus me-1"></i> Pesan Laundry
                    </a>
                </li>
            </ul>

            <!-- Right Buttons: Login & Register -->
            <div class="d-flex align-items-center gap-2">
                <a href="{{ route('login') }}" class="btn {{ Request::is('auth*') ? 'btn-light text-primary fw-bold' : 'btn-outline-light' }}">
                    <i class="bi bi-box-arrow-in-right me-1"></i> Login
                </a>
                <a href="{{ route('register') }}" class="btn {{ Request::is('register*') ? 'btn-light text-primary fw-bold' : 'btn-warning text-dark fw-semibold' }}">
                    <i class="bi bi-person-plus me-1"></i> Register
                </a>
            </div>
        </div>
    </div>
</nav>
