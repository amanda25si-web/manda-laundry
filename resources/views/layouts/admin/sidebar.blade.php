{{-- SIDEBAR --}}
    <aside class="admin-sidebar" id="adminSidebar" aria-label="Main navigation">

        <div class="sidebar-header">
            <a class="brand-mark" href="{{ route('admin.dashboard') }}" aria-label="Laundry Kita dashboard">
                <span class="brand-icon">
                    <i class="bi bi-grid-1x2-fill" aria-hidden="true"></i>
                </span>
                <span class="brand-copy">
                    <span class="brand-title">Dashboard Admin</span>
                    <span class="brand-subtitle">Laundry Kita</span>
                </span>
            </a>
        </div>

        {{-- MENU SIDEBAR --}}
        <nav class="sidebar-nav">
            <a class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}"
               href="{{ route('admin.dashboard') }}">
                <span class="nav-icon"><i class="bi bi-speedometer2" aria-hidden="true"></i></span>
                <span class="nav-text">Dashboard</span>
            </a>

            <a class="nav-link {{ request()->routeIs('admin.index', 'admin.create', 'admin.edit') ? 'active' : '' }}"
               href="{{ route('admin.index') }}">
                <span class="nav-icon"><i class="bi bi-person-gear" aria-hidden="true"></i></span>
                <span class="nav-text">Data Admin</span>
            </a>

            <a class="nav-link {{ request()->routeIs('pelanggan.*') ? 'active' : '' }}"
               href="{{ route('pelanggan.index') }}">
                <span class="nav-icon"><i class="bi bi-people" aria-hidden="true"></i></span>
                <span class="nav-text">Data Pelanggan</span>
            </a>

            <a class="nav-link {{ request()->routeIs('layanan.*') ? 'active' : '' }}"
               href="{{ route('layanan.index') }}">
                <span class="nav-icon"><i class="bi bi-basket" aria-hidden="true"></i></span>
                <span class="nav-text">Data Layanan</span>
            </a>

            <a class="nav-link {{ request()->routeIs('user.*') ? 'active' : '' }}"
                href="{{ route('user.index') }}">
                    <span class="nav-icon">
                        <i class="bi bi-person" aria-hidden="true"></i>
                    </span>
                    <span class="nav-text">Data User</span>
            </a>
        </nav>

        {{-- PROFIL SIDEBAR --}}
        <div class="sidebar-user">
            <img
                src="{{ asset('assets-admin/images/png/logo-laundry.png') }}"
                alt="Logo Laundry Kita"
                style="width:60px;height:60px;object-fit:contain;">
            <strong>Admin</strong>
            <small>Active Workspace</small>
        </div>

        <div class="sidebar-footer">
            <span class="status-dot"></span>
            <span class="sidebar-footer-text">System running smoothly</span>
        </div>
    </aside>
