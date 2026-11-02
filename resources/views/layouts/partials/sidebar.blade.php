<aside class="admin-sidebar" id="admin-sidebar">
    <div class="sidebar-menu">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a href="{{ url('/admin/dashboard') }}" class="nav-link {{ Request::is('admin/dashboard*') ? 'active' : '' }}">
                    <i class="bi bi-speedometer2"></i> Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/admin/orders') }}" class="nav-link {{ Request::is('admin/orders*') ? 'active' : '' }}">
                    <i class="bi bi-bag-check"></i> Daftar Pesanan
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('users.index') }}" class="nav-link {{ Request::is('admin/users*') ? 'active' : '' }}">
                    <i class="bi bi-people"></i> Kelola User
                </a>
            </li>
            
            <li class="nav-header text-uppercase text-muted px-3 mt-3 mb-2 small fw-bold">Katalog Layanan</li>
            <li class="nav-item">
                <a href="{{ route('categories.index') }}" class="nav-link {{ Request::is('admin/categories*') ? 'active' : '' }}">
                    <i class="bi bi-tags"></i> Kategori Layanan
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('packages.index') }}" class="nav-link {{ Request::is('admin/packages*') ? 'active' : '' }}">
                    <i class="bi bi-box-seam"></i> Paket Laundry
                </a>
            </li>

            <li class="nav-header text-uppercase text-muted px-3 mt-3 mb-2 small fw-bold">Operasional</li>
            <li class="nav-item">
                <a href="{{ url('/pesan-laundry') }}" class="nav-link" target="_blank">
                    <i class="bi bi-plus-circle"></i> Form Pesan Baru
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="bi bi-gear"></i> Pengaturan Sistem
                </a>
            </li>
        </ul>
    </div>
</aside>
