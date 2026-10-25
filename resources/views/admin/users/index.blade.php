<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola User - Laundry Kita</title>
    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
</head>
<body class="bg-light">

    <div class="d-flex" id="wrapper">
        
        @include('layouts.partials.sidebar')

        <!-- Page Content -->
        <div id="page-content-wrapper" class="w-100">
            <!-- Top Navbar Admin -->
            <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom px-4 py-3">
                <div class="container-fluid px-0">
                    <span class="navbar-brand fw-semibold fs-5">Kelola Akun User</span>
                    <div class="d-flex align-items-center">
                        <span class="me-3 text-secondary">Halo, <strong>Admin</strong></span>
                        <a href="/" class="btn btn-sm btn-outline-primary">Lihat Web Utama</a>
                    </div>
                </div>
            </nav>

            <!-- Main Content Container -->
            <div class="container-fluid p-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div>
                        <h2 class="fw-bold text-dark mb-1">Daftar User</h2>
                        <p class="text-muted small mb-0">Kelola data akun pengguna / admin sistem Laundry Kita</p>
                    </div>
                    <a href="{{ route('users.create') }}" class="btn btn-primary fw-semibold shadow-sm">
                        <i class="bi bi-plus-lg me-1"></i> Tambah User
                    </a>
                </div>

                {{-- Flash Message Success --}}
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show shadow-sm" role="alert">
                        <i class="bi bi-check-circle-fill me-2"></i>{{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif

                <!-- Tabel Data User -->
                <div class="card border-0 shadow-sm rounded-3">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover align-middle mb-0">
                                <thead class="table-light text-uppercase fs-7">
                                    <tr>
                                        <th class="py-3 px-4">No</th>
                                        <th class="py-3">Nama Lengkap</th>
                                        <th class="py-3">Email</th>
                                        <th class="py-3 text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($users as $index => $user)
                                        <tr>
                                            <td class="px-4 fw-semibold text-secondary">{{ $index + 1 }}</td>
                                            <td>
                                                <div class="fw-bold text-dark">{{ $user->name }}</div>
                                            </td>
                                            <td class="text-muted">{{ $user->email }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-warning text-white fw-semibold px-3 me-1">
                                                    <i class="bi bi-pencil-square"></i> Edit
                                                </a>
                                                <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus user ini?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger fw-semibold px-3">
                                                        <i class="bi bi-trash"></i> Hapus
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4" class="text-center py-5 text-muted">
                                                <i class="bi bi-inbox fs-2 d-block mb-2 text-secondary"></i>
                                                Belum ada data user yang terdaftar.
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <footer class="admin-footer py-3 bg-white border-top mt-auto">
                <div class="container-fluid px-4">
                    <div class="row">
                        <div class="col-md-6">
                            <p class="mb-0 text-muted small">&copy; 2026 <strong>Laundry Kita</strong>. All rights reserved.</p>
                        </div>
                        <div class="col-md-6 text-md-end">
                            <p class="mb-0 text-muted small">Sistem Informasi Pengelolaan Laundry</p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>