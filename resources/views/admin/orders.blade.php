<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pesanan - Laundry Kita</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <style>
        body { background-color: #f8f9fa; }
        .sidebar { min-height: 100vh; background: #fff; border-right: 1px solid #dee2e6; }
        .nav-link.active { font-weight: bold; background-color: #e9ecef; border-radius: 5px; }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 col-lg-2 sidebar p-3">
                <h4 class="text-primary fw-bold mb-4"><i class="bi bi-shop"></i> Laundry Kita</h4>
                <ul class="nav flex-column gap-2">
    <li class="nav-item">
        <a class="nav-link text-dark" href="{{ route('admin.dashboard') }}">
            <i class="bi bi-speedometer2 me-2"></i> Dashboard
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-dark" href="{{ route('laundry.index') }}">
            <i class="bi bi-bag-check me-2"></i> Daftar Pesanan
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-dark" href="{{ route('laundry.create') }}">
            <i class="bi bi-plus-circle me-2"></i> Tambah Pesanan
        </a>
    </li>
</ul>
            </div>

            <!-- Content Area -->
            <main class="col-md-9 col-lg-10 ms-sm-auto px-4 py-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Daftar Pesanan</h1>
                </div>

                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <div class="card shadow-sm">
                    <div class="card-header bg-white py-3">
                        <h5 class="card-title mb-0 fw-bold">Semua Pesanan Masuk</h5>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover align-middle mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>ID Pesanan</th>
                                        <th>Nama Pelanggan</th>
                                        <th>Layanan</th>
                                        <th>Status</th>
                                        <th>Tanggal Pesan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($orders as $order)
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
                                            <td colspan="5" class="text-center text-muted py-4">Belum ada pesanan masuk.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>