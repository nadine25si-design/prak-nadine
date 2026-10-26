<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="referrer" content="strict-origin-when-cross-origin">
    <meta http-equiv="X-Content-Type-Options" content="nosniff">
    <meta name="description" content="Modern Bootstrap 5 Admin Template - Clean, responsive dashboard">
    <meta name="keywords" content="bootstrap, admin, dashboard, template, modern, responsive">
    <meta name="author" content="Bootstrap Admin Template">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Modern Bootstrap Admin Template">
    <meta property="og:description" content="Clean and modern admin dashboard template built with Bootstrap 5">
    <meta property="og:type" content="website">
    
    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="{{ asset('assets-admin/metis-v1.0.0/dist-modern/assets/icons/favicon.svg') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets-admin/metis-v1.0.0/dist-modern/assets/icons/favicon.png') }}">
    
    <!-- Title -->
    <title>Dashboard Admin - Laundry Kita</title>
    
    <!-- Theme Color -->
    <meta name="theme-color" content="#2563eb">
    
    <!-- PWA Manifest -->
    <link rel="manifest" href="{{ asset('assets-admin/metis-v1.0.0/dist-modern/assets/manifest-D0qHSrzp.json') }}">

    <!-- Metis Scripts & Styles -->
    <script type="module" src="{{ asset('assets-admin/metis-v1.0.0/dist-modern/assets/main-BqKkk_Lj.js') }}"></script>
    <script type="module" src="{{ asset('assets-admin/metis-v1.0.0/dist-modern/assets/rolldown-runtime-hePW80VL.js') }}"></script>
    <script type="module" src="{{ asset('assets-admin/metis-v1.0.0/dist-modern/assets/vendor-ui-Be8JR3ju.js') }}"></script>
    <script type="module" src="{{ asset('assets-admin/metis-v1.0.0/dist-modern/assets/vendor-bootstrap-Dj44xPS1.js') }}"></script>
    <script type="module" src="{{ asset('assets-admin/metis-v1.0.0/dist-modern/assets/vendor-charts-_UPf9h_O.js') }}"></script>
    <script type="module" src="{{ asset('assets-admin/metis-v1.0.0/dist-modern/assets/main-1Eks1J0_.js') }}"></script>
    
    <!-- CSS Utama (Disesuaikan dengan nama file asli: main-Kuf3cpuU.css) -->
     <link rel="stylesheet" href="{{ asset('assets-admin/metis-v1.0.0/dist-modern/assets/main-Kuf3cpUe.css') }}">
    </head>

<body data-page="dashboard" class="admin-layout">
    <a href="#main-content" class="skip-link">Skip to main content</a>
    <!-- Loading Screen -->
    <div id="loading-screen" class="loading-screen">
        <div class="loading-spinner">
            <div class="spinner-border text-primary" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>

    <!-- Admin App Container -->
    <div class="admin-app">
        <!-- Main Wrapper -->
        <div class="admin-wrapper" id="admin-wrapper">
            
        @include('layouts.partials.sidebar')

        <!-- Header -->
        <header class="admin-header">
            <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
                <div class="container-fluid">
                    <!-- Logo/Brand - Now first on the left -->
                    <a class="navbar-brand d-flex align-items-center" href="./index.html">
                        <img src="{{ asset('assets/img/logo/logo laundry_kita.png') }}" alt="Logo Laundry Kita" height="32" class="d-inline">                        <span class="h4 mb-0 fw-bold text-primary-emphasis">Laundry Kita</span>
                    </a>

                    <!-- Sidebar Toggle -->
                    <button class="hamburger-menu" type="button" data-sidebar-toggle aria-label="Toggle sidebar">
                        <i class="bi bi-list"></i>
                    </button>

                    <!-- Search Bar with Alpine.js -->
                    <div class="search-container flex-grow-1 mx-4" x-data="searchComponent">
                        <div class="position-relative">
                            <input type="search" 
                                   class="form-control" 
                                   placeholder="Search... (Ctrl+K)"
                                   x-model="query"
                                   @input="search()"
                                   data-search-input
                                   aria-label="Search">
                            <i class="bi bi-search position-absolute top-50 end-0 translate-middle-y me-3"></i>
                            
                            <!-- Search Results Dropdown -->
                            <div x-show="results.length > 0" 
                                 x-transition:enter="transition ease-out duration-100"
                                 x-transition:enter-start="opacity-0 scale-95"
                                 x-transition:enter-end="opacity-100 scale-100"
                                 class="position-absolute top-100 start-0 w-100 bg-white border rounded-2 shadow-lg mt-1 z-3">
                                <template x-for="result in results" :key="result.title">
                                    <a :href="result.url" class="d-block px-3 py-2 text-decoration-none text-dark border-bottom">
                                        <div class="d-flex align-items-center">
                                            <i class="bi bi-file-text me-2 text-muted"></i>
                                            <span x-text="result.title"></span>
                                            <small class="ms-auto text-muted" x-text="result.type"></small>
                                        </div>
                                    </a>
                                </template>
                            </div>
                        </div>
                    </div>

                    <!-- Right Side Icons -->
                    <div class="navbar-nav flex-row">
                        <!-- Theme Toggle with Alpine.js -->
                        <div x-data="themeSwitch">
                            <button class="btn btn-outline-secondary me-2" 
                                    type="button" 
                                    @click="toggle()"
                                    data-bs-toggle="tooltip"
                                    data-bs-placement="bottom"
                                    title="Toggle theme">
                                <i class="bi bi-sun-fill" x-show="currentTheme === 'light'"></i>
                                <i class="bi bi-moon-fill" x-show="currentTheme === 'dark'"></i>
                            </button>
                        </div>

                        <!-- Fullscreen Toggle (hidden on phones) -->
                        <button class="btn btn-outline-secondary me-2 d-none d-lg-inline-block"
                                type="button"
                                data-fullscreen-toggle
                                data-bs-toggle="tooltip"
                                data-bs-placement="bottom"
                                title="Toggle fullscreen">
                            <i class="bi bi-arrows-fullscreen icon-hover"></i>
                        </button>

                        <!-- Notifications -->
                        <div class="dropdown me-2">
                            <button class="btn btn-outline-secondary position-relative" 
                                    type="button" 
                                    data-bs-toggle="dropdown" 
                                    aria-expanded="false">
                                <i class="bi bi-bell"></i>
                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                    3
                                </span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><h6 class="dropdown-header">Notifications</h6></li>
                                <li><a class="dropdown-item" href="#">New user registered</a></li>
                                <li><a class="dropdown-item" href="#">Server status update</a></li>
                                <li><a class="dropdown-item" href="#">New message received</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item text-center" href="#">View all notifications</a></li>
                            </ul>
                        </div>

                        <!-- User Menu -->
                        <div class="dropdown">
                            <button class="btn btn-outline-secondary d-flex align-items-center" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{ asset('assets-admin/metis-v1.0.0/dist-modern/assets/images/avatar-placeholder.svg') }}" alt="User Avatar" width="24" height="24" class="rounded-circle me-2">
                                <span class="d-none d-md-inline">Admin</span>
                                <i class="bi bi-chevron-down ms-1"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="#"><i class="bi bi-person me-2"></i>Profile</a></li>
                                <li><a class="dropdown-item" href="#"><i class="bi bi-gear me-2"></i>Settings</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#"><i class="bi bi-box-arrow-right me-2"></i>Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

<!-- Sidebar Backdrop (mobile overlay) -->
<div class="sidebar-backdrop" aria-hidden="true"></div>

        <!-- Sidebar Backdrop (mobile overlay) -->
        <div class="sidebar-backdrop" aria-hidden="true"></div>
        <!-- Main Content -->
        <main id="main-content" class="admin-main">
            <div class="container-fluid p-4 p-lg-4">
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show shadow-sm mb-4" role="alert">
                        <i class="bi bi-check-circle-fill me-2 fs-5"></i>
                        <strong>Berhasil!</strong> {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <!-- Page Header -->
                <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center gap-3 mb-4">
                    <div>
                        <h1 class="h3 mb-0">Dashboard</h1>
                        <p class="text-muted mb-0">Last 30 days &middot; updated 5 minutes ago</p>
                    </div>
                    <div class="d-flex gap-2 flex-shrink-0">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newItemModal" aria-label="New Item">
                            <i class="bi bi-plus-lg me-2" aria-hidden="true"></i>
                            <span class="d-none d-sm-inline">New Item</span>
                        </button>
                        <button type="button" class="btn btn-outline-secondary"
                                data-bs-toggle="tooltip"
                                title="Refresh data">
                            <i class="bi bi-arrow-clockwise icon-hover"></i>
                        </button>
                        <button type="button" class="btn btn-outline-secondary d-none d-sm-inline-block"
                                data-bs-toggle="tooltip"
                                title="Export data">
                            <i class="bi bi-download icon-hover"></i>
                        </button>
                        <button type="button" class="btn btn-outline-secondary d-none d-sm-inline-block"
                                data-bs-toggle="tooltip"
                                title="Settings">
                            <i class="bi bi-gear icon-hover"></i>
                        </button>
                    </div>
                </div>

                <!-- Stats Cards with Alpine.js -->
                <div class="row g-3 g-lg-4 mb-4">
                    <div class="col-sm-6 col-xl-3" x-data="statsCounter(12426, 5)">
                        <div class="card stats-card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="stats-icon bg-primary bg-opacity-10 text-primary">
                                            <i class="bi bi-people"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <p class="h6 mb-0 text-muted">Total Orders</p>
                                        <div class="h3 mb-0">{{ $totalOrders ?? 0 }}</div>
                                        <small class="text-success-emphasis">
                                            <i class="bi bi-arrow-up"></i> +12.5%
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xl-3">
                        <div class="card stats-card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="stats-icon bg-success bg-opacity-10 text-success">
                                            <i class="bi bi-graph-up"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <p class="h6 mb-0 text-muted">Pending Orders</p>
                                        <h3 class="mb-0">{{ $pendingOrders ?? 0 }}</h3>
                                        <small class="text-success-emphasis">
                                            <i class="bi bi-arrow-up"></i> +8.2%
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xl-3">
                        <div class="card stats-card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="stats-icon bg-warning bg-opacity-10 text-warning">
                                            <i class="bi bi-bag-check"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <p class="h6 mb-0 text-muted">Completed Orders</p>
                                        <h3 class="mb-0">{{ $completedOrders ?? 0 }}</h3>
                                        <small class="text-danger-emphasis">
                                            <i class="bi bi-arrow-down"></i> -2.1%
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xl-3">
    <div class="card stats-card">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <div class="flex-shrink-0">
                    <div class="stats-icon bg-info bg-opacity-10 text-info">
                        <i class="bi bi-calendar-check"></i>
                    </div>
                </div>
                <div class="flex-grow-1 ms-3">
                    <p class="h6 mb-0 text-muted">Pesanan Hari Ini</p>
                    <h3 class="mb-0">{{ $todayOrdersCount ?? 0 }}</h3>
                    <small class="text-success-emphasis">
                        <i class="bi bi-arrow-up"></i> Real-time
                    </small>
                </div>
            </div>
        </div>
    </div>
</div>

                <!-- Chart Section -->
                <div class="row g-4 mb-4">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h2 class="h5 card-title mb-0">Revenue Overview</h2>
                                <div class="btn-group btn-group-sm" role="group">
                                    <button type="button" class="btn btn-outline-primary active" data-chart-period="7d">7D</button>
                                    <button type="button" class="btn btn-outline-primary" data-chart-period="30d">30D</button>
                                    <button type="button" class="btn btn-outline-primary" data-chart-period="90d">90D</button>
                                    <button type="button" class="btn btn-outline-primary" data-chart-period="1y">1Y</button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="revenueChart" style="min-height: 320px;"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
    <div class="card card-fill-row">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h2 class="h5 card-title mb-0">Aktivitas Terbaru</h2>
            <span class="badge bg-primary">{{ $recentOrders->count() }} Pesanan</span>
        </div>
        <div class="card-body">
            <div class="activity-feed">
                @forelse($recentOrders->take(5) as $order)
                    <div class="activity-item d-flex mb-3 align-items-start">
                        <div class="activity-icon bg-primary-subtle text-primary rounded-circle p-2 me-3 d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                            <i class="bi bi-bag-check fs-5"></i>
                        </div>
                        <div class="activity-content">
                            <p class="mb-0 fw-semibold">{{ $order->name }}</p>
                            <small class="text-muted d-block">
                                Memesan: <strong>{{ $order->service }}</strong>
                            </small>
                            <small class="text-muted">
                                {{ $order->created_at ? $order->created_at->diffForHumans() : '-' }}
                            </small>
                        </div>
                    </div>
                @empty
                    <p class="text-muted text-center my-3">Belum ada aktivitas terbaru.</p>
                @endforelse
            </div>
        </div>
    </div>
</div>

                <!-- Additional Charts Row -->
                <div class="row g-4 mb-4">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h2 class="h5 card-title mb-0">User Growth (Last 7 Days)</h2>
                            </div>
                            <div class="card-body">
                                <div id="userGrowthChart" style="min-height: 280px;"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h2 class="h5 card-title mb-0">Order Status Distribution</h2>
                            </div>
                            <div class="card-body">
                                <div id="orderStatusChart" style="min-height: 280px;"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- New Widgets Row -->
                <div class="row g-4 mb-4">
                    <!-- Recent Orders -->
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-header">
                                <h2 class="h5 card-title mb-0">Recent Orders</h2>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead>
                                            <tr>
                                                <th>ORDER ID</th>
                                                <th>PELANGGAN</th>
                                                <th>PAKET / LAYANAN</th>
                                                <th>STATUS</th>
                                                <th>TANGGAL PESAN</th>
                                            </tr>
                                        </thead>
                                        <tbody>
    @forelse($recentOrders as $order)
        <tr>
            <td>#{{ $order->id }}</td>
            <td>{{ $order->name ?? 'Pelanggan' }}</td>
            <td>{{ $order->service ?? 'Laundry' }}</td>
            <td>
    <form action="{{ route('pesanan.updateStatus', $order->id) }}" method="POST" class="d-inline">
        @csrf
        @method('PATCH')
        <select name="status" class="form-select form-select-sm fw-semibold {{ 
            ($order->status ?? '') == 'Selesai' ? 'bg-success text-white' : 
            (($order->status ?? '') == 'Sedang Diproses' ? 'bg-primary text-white' : 'bg-warning text-dark') 
        }}" onchange="this.form.submit()">
            <option value="Menunggu Konfirmasi" {{ ($order->status ?? 'Menunggu Konfirmasi') == 'Menunggu Konfirmasi' ? 'selected' : '' }}>Menunggu Konfirmasi</option>
            <option value="Sedang Diproses" {{ ($order->status ?? '') == 'Sedang Diproses' ? 'selected' : '' }}>Sedang Diproses</option>
            <option value="Selesai" {{ ($order->status ?? '') == 'Selesai' ? 'selected' : '' }}>Selesai</option>
            <option value="Diambil" {{ ($order->status ?? '') == 'Diambil' ? 'selected' : '' }}>Diambil</option>
        </select>
    </form>
</td>
            <td>{{ $order->created_at ? $order->created_at->format('d M Y') : '-' }}</td>
        </tr>
    @empty
        <tr>
            <td colspan="5" class="text-center text-muted">Belum ada pesanan masuk.</td>
        </tr>
    @endforelse
</tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    

            </div>
        </main>

        <!-- Footer -->
<footer class="admin-footer py-3 bg-white border-top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <p class="mb-0 text-muted">&copy; 2026 <strong>Laundry Kita</strong>. All rights reserved.</p>
            </div>
            <div class="col-md-6 text-md-end">
                <p class="mb-0 text-muted">Sistem Informasi Pengelolaan Laundry</p>
            </div>
        </div>
    </div>
</footer>

        </div> 
        <!-- /.admin-wrapper -->
    </div>

    <!-- Toast Container -->
    <div aria-live="polite" aria-atomic="true" class="position-fixed top-0 end-0 p-3" style="z-index: 11">
        <div id="toast-container"></div>
    </div>


    <!-- Icon Demo Modal -->
    <div class="modal fade" id="iconDemoModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        <i class="bi bi-palette me-2"></i>
                        Icon System Demo
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body" x-data="iconDemo">
                    <div class="row mb-4">
                        <div class="col-12">
                            <h6 class="mb-1">Bootstrap Icons <span class="badge bg-primary">subset</span></h6>
                            <p class="text-muted small mb-0">
                                Icons are referenced by semantic name (<code>dashboard</code>, <code>success</code>)
                                and resolved to Bootstrap Icons classes by the icon manager. Only the icons actually
                                used are compiled into the CSS subset.
                            </p>
                        </div>
                    </div>

                    <div class="row g-3">
                        <div class="col-md-3 text-center">
                            <div class="p-3 border rounded">
                                <i class="bi bi-speedometer2 icon-xl text-primary mb-2"></i>
                                <br><small>Dashboard</small>
                            </div>
                        </div>
                        <div class="col-md-3 text-center">
                            <div class="p-3 border rounded">
                                <i class="bi bi-people icon-xl text-success mb-2"></i>
                                <br><small>Users</small>
                            </div>
                        </div>
                        <div class="col-md-3 text-center">
                            <div class="p-3 border rounded">
                                <i class="bi bi-graph-up icon-xl text-info mb-2"></i>
                                <br><small>Analytics</small>
                            </div>
                        </div>
                        <div class="col-md-3 text-center">
                            <div class="p-3 border rounded">
                                <i class="bi bi-gear icon-xl text-warning mb-2"></i>
                                <br><small>Settings</small>
                            </div>
                        </div>
                    </div>
                    
                    <h6 class="mt-4">Icon Animations</h6>
                    <div class="row g-3">
                        <div class="col-md-3 text-center">
                            <i class="bi bi-arrow-clockwise icon-xl icon-spin text-primary"></i>
                            <br><small>Spin</small>
                        </div>
                        <div class="col-md-3 text-center">
                            <i class="bi bi-heart icon-xl icon-pulse text-danger"></i>
                            <br><small>Pulse</small>
                        </div>
                        <div class="col-md-3 text-center">
                            <i class="bi bi-star icon-xl icon-hover text-warning"></i>
                            <br><small>Hover Effect</small>
                        </div>
                        <div class="col-md-3 text-center">
                            <i class="bi bi-check-circle icon-xl text-success"></i>
                            <br><small>Static</small>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        <i class="bi bi-x me-2"></i>Close
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->

    <!-- Modal Tambah Pesanan Cepat -->
    <div class="modal fade" id="newItemModal" tabindex="-1" aria-labelledby="newItemModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content border-0 shadow">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title fw-bold" id="newItemModalLabel">
                        <i class="bi bi-plus-circle me-2"></i>Tambah Pesanan Cepat - Laundry Kita
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                
                <form action="{{ route('pesanan.store') }}" method="POST">
                    @csrf
                    <div class="modal-body p-4">
                        <div class="row g-3">
                            <!-- Nama Pelanggan -->
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Nama Pelanggan</label>
                                <input type="text" name="name" class="form-control" placeholder="Contoh: Budi Santoso" required>
                            </div>

                            <!-- Nomor WhatsApp -->
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Nomor WhatsApp</label>
                                <input type="text" name="whatsapp" class="form-control" placeholder="08123456789" required>
                            </div>

                            <!-- Layanan / Paket -->
                            <div class="col-md-6 mb-3">
    <label class="form-label fw-semibold">Layanan / Paket</label>
    <select name="service" class="form-select" id="adminServiceSelect" required onchange="calculateAdminTotal()">
        <option value="" selected disabled>-- Pilih Layanan --</option>
        <option value="Cuci Komplit (Cuci + Kering + Setrika)" data-price="10000">Cuci Komplit - Rp 10.000 / kg</option>
        <option value="Dry Cleaning / Cuci Kering" data-price="12000">Dry Cleaning / Cuci Kering - Rp 12.000 / kg</option>
        <option value="Laundry Satuan (Jas, Gaun, Bedcover, dll)" data-price="15000">Laundry Satuan - Rp 15.000 / pcs</option>
        <option value="Cuci Sepatu / Tas" data-price="25000">Cuci Sepatu / Tas - Rp 25.000 / pasang</option>
        <option value="Express 3 Jam" data-price="20000">Express 3 Jam - Rp 20.000 / kg</option>
    </select>
</div>

                            <!-- Tanggal Penjemputan -->
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Tanggal Penjemputan / Selesai</label>
                                <input type="date" name="pickup_date" class="form-control" value="{{ date('Y-m-d') }}" required>
                            </div>

                            <!-- Input Berat (Kg) / Jumlah -->
<div class="col-md-6 mb-3">
    <label class="form-label fw-semibold">Berat (Kg) / Jumlah</label>
    <input type="number" name="qty" id="adminQtyInput" class="form-control" value="1" min="1" placeholder="Masukkan jumlah/kg" oninput="calculateAdminTotal()">
</div>

<!-- Tampilan Total Pembayaran -->
<div class="col-12 mb-3">
    <div class="p-3 bg-light border rounded d-flex justify-content-between align-items-center shadow-sm">
        <span class="fw-semibold text-secondary">Total Pembayaran:</span>
        <span class="fs-4 fw-bold text-primary" id="adminTotalPriceDisplay">Rp 0</span>
        <input type="hidden" name="total_price" id="adminTotalPriceInput" value="0">
    </div>
</div>

                            <!-- Metode Pembayaran -->
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Metode Pembayaran</label>
                                <select name="payment_method" id="adminPaymentMethodSelect" class="form-select" onchange="toggleAdminQris()">
                                    <option value="Tunai / Cash" selected>Tunai / Cash</option>
                                    <option value="QRIS / E-Wallet">QRIS / E-Wallet</option>
                                    <option value="Transfer Bank">Transfer Bank</option>
                                </select>
                            </div>

<div class="col-12 text-center d-none" id="adminQrisContainer">
    <div class="p-3 border rounded bg-light d-inline-block shadow-sm mt-2">
        <p class="fw-bold mb-2 text-dark"><i class="bi bi-qr-code-scan me-1"></i> Scan QRIS untuk Pembayaran</p>
        <img src="{{ asset('assets/images/qris.jpeg') }}" alt="QRIS" class="img-fluid rounded border" style="max-width: 180px;">
    </div>
</div>

<div class="col-12 mb-3" id="proofContainer" style="display: none;">
    <label class="form-label fw-semibold">Upload Bukti Pembayaran / Resi</label>
    <input type="file" name="payment_proof" class="form-control" accept="image/*">
    <div class="form-text text-muted">Format yang didukung: JPG, JPEG, PNG (Maks. 2MB)</div>
</div>
                            <!-- Kode Promo / Diskon -->
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Kode Promo / Diskon (Opsional)</label>
                                <input type="text" name="promo_code" class="form-control" placeholder="Contoh: LAUNDRYHEMAT">
                            </div>

                            <!-- Alamat -->
                            <div class="col-12">
                                <label class="form-label fw-semibold">Alamat Lengkap</label>
                                <textarea name="address" class="form-control" rows="2" placeholder="Masukkan alamat penjemputan/pengantaran..." required></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer bg-light">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary fw-bold">
                            <i class="bi bi-check-circle me-1"></i> Simpan Pesanan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
function toggleAdminQris() {
    const select = document.getElementById('adminPaymentMethodSelect');
    const container = document.getElementById('adminQrisContainer');
    const proofContainer = document.getElementById('proofContainer');
    
    if (select && container) {
        if (select.value === 'QRIS / E-Wallet' || select.value === 'Transfer Bank') {
            container.classList.remove('d-none');
            if(proofContainer) proofContainer.style.display = 'block';
        } else {
            container.classList.add('d-none');
            if(proofContainer) proofContainer.style.display = 'none';
        }
    }
}

function calculateAdminTotal() {
    const serviceSelect = document.getElementById('adminServiceSelect');
    const qtyInput = document.getElementById('adminQtyInput');
    const priceDisplay = document.getElementById('adminTotalPriceDisplay');
    const priceInput = document.getElementById('adminTotalPriceInput');

    if (serviceSelect && qtyInput) {
        const selectedOption = serviceSelect.options[serviceSelect.selectedIndex];
        const pricePerUnit = parseFloat(selectedOption.getAttribute('data-price')) || 0;
        const qty = parseFloat(qtyInput.value) || 0;

        const total = pricePerUnit * qty;

        if (priceDisplay) priceDisplay.innerText = 'Rp ' + total.toLocaleString('id-ID');
        if (priceInput) priceInput.value = total;
    }
}
</script>
</script>
</body>
</html>
