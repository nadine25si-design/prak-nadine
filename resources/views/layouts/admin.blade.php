<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel') - Laundry Kita</title>
    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            background-color: #f8fafc;
            color: #334155;
        }
        .admin-sidebar {
            width: 260px;
            min-height: 100vh;
            background: #ffffff;
            border-right: 1px solid #e2e8f0;
            padding: 1.25rem 1rem;
            flex-shrink: 0;
        }
        .admin-sidebar .nav-link {
            color: #475569;
            padding: 0.65rem 1rem;
            border-radius: 0.5rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
            font-weight: 500;
            margin-bottom: 0.25rem;
            transition: all 0.2s ease;
            text-decoration: none;
        }
        .admin-sidebar .nav-link:hover, .admin-sidebar .nav-link.active {
            color: #2563eb;
            background: #eff6ff;
            font-weight: 600;
        }
        .admin-sidebar .nav-header {
            font-size: 0.75rem;
            letter-spacing: 0.05em;
        }
        .card-custom {
            border: 1px solid #e2e8f0;
            border-radius: 0.75rem;
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.05);
            background: #ffffff;
        }
        .table > :not(caption) > * > * {
            padding: 0.85rem 1rem;
        }
    </style>
    @stack('styles')
</head>
<body class="bg-light">

    <div class="d-flex" id="wrapper">
        
        <!-- Sidebar Admin -->
        @include('layouts.partials.sidebar')

        <!-- Page Content Wrapper -->
        <div id="page-content-wrapper" class="w-100 d-flex flex-column min-vh-100">
            <!-- Top Navbar Admin -->
            <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom px-4 py-3 sticky-top">
                <div class="container-fluid px-0">
                    <div class="d-flex align-items-center gap-2">
                        <img src="{{ asset('assets/img/logo/logo laundry_kita.png') }}" alt="Laundry Kita" height="32">
                        <span class="navbar-brand fw-bold fs-5 mb-0 text-primary">Panel Admin</span>
                    </div>
                    <div class="d-flex align-items-center gap-3">
                        <a href="{{ url('/') }}" class="btn btn-sm btn-outline-primary fw-semibold" target="_blank">
                            <i class="bi bi-box-arrow-up-right me-1"></i> Web Utama
                        </a>
                        <span class="text-secondary small">
                            Halo, <strong>{{ session('username', 'Admin') }}</strong>
                        </span>
                        <form action="{{ route('logout') }}" method="POST" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-sm btn-outline-danger fw-semibold" title="Keluar">
                                <i class="bi bi-box-arrow-right"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </nav>

            <!-- Main Content Container -->
            <main class="container-fluid p-4 flex-grow-1">
                {{-- Flash Message Success --}}
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show shadow-sm" role="alert">
                        <i class="bi bi-check-circle-fill me-2"></i>{{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif

                {{-- Flash Message Error --}}
                @if(session('error'))
                    <div class="alert alert-danger alert-dismissible fade show shadow-sm" role="alert">
                        <i class="bi bi-exclamation-triangle-fill me-2"></i>{{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif

                {{-- Validation Errors --}}
                @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show shadow-sm" role="alert">
                        <strong class="d-block mb-1"><i class="bi bi-exclamation-octagon-fill me-1"></i> Terdapat kesalahan pada input:</strong>
                        <ul class="mb-0 ps-3">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif

                @yield('content')
            </main>

            <!-- Footer Admin -->
            <footer class="py-3 bg-white border-top mt-auto text-center text-muted small">
                &copy; {{ date('Y') }} <strong>Laundry Kita</strong> - Panel Manajemen Sistem Informasi
            </footer>
        </div>
    </div>

    <!-- Bootstrap 5 Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>
</html>

