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
                                <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="{{ url('/#about') }}">About</a></li>
                                <li><a href="{{ url('/#services') }}">Services</a></li>
                                <li><a href="{{ url('/#paket-laundry') }}">Paket</a></li>
                                <li><a href="{{ url('/#form-pemesanan') }}">Pesan Laundry</a></li>
                                <li><a href="{{ url('/#location') }}">Contact</a></li>
                                <li class="d-lg-none {{ Request::is('auth*') ? 'active' : '' }}"><a href="{{ route('login') }}">Login</a></li>
                                <li class="d-lg-none {{ Request::is('register*') ? 'active' : '' }}"><a href="{{ route('register') }}">Register</a></li>
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

                <a href="{{ route('login') }}" class="header-btn1" style="background: #f0f4ff; color: #4361ee; font-weight: 600; padding: 10px 18px; border-radius: 30px; border: 1px solid #d0dbff; transition: 0.3s;">
                    <i class="ti-user" style="margin-right: 4px;"></i> Login
                </a>

                <a href="{{ route('register') }}" class="header-btn1" style="background: #4361ee; color: #ffffff; font-weight: 600; padding: 10px 18px; border-radius: 30px; border: 1px solid #4361ee; transition: 0.3s;">
                    <i class="ti-pencil-alt" style="margin-right: 4px;"></i> Register
                </a>

                <a href="{{ url('/#form-pemesanan') }}" class="header-btn2">
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
