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
            <li class="nav-item">
                <a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#newItemModal">
                    <i class="bi bi-plus-circle"></i> Tambah Pesanan
                </a>
            </li>
            <li class="nav-header text-uppercase text-muted px-3 mt-3 mb-2 small fw-bold">Pengaturan</li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="bi bi-gear"></i> Pengaturan Sistem
                </a>
            </li>
        </ul>
    </div>
</aside>