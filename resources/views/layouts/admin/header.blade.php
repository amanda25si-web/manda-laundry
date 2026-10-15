 {{-- NAVBAR --}}
        <nav class="navbar admin-navbar navbar-expand bg-white">
            <div class="container-fluid px-3 px-lg-4">

                <button class="sidebar-toggle"
                        type="button"
                        data-sidebar-toggle
                        aria-controls="adminSidebar"
                        aria-expanded="true"
                        aria-label="Toggle sidebar">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>

                <div class="d-none d-md-flex ms-3 flex-grow-1">
                    <span class="text-muted">Sistem Informasi Laundry Kita</span>
                </div>

                <div class="navbar-actions ms-auto">

                    <button class="icon-button theme-toggle"
                            type="button"
                            data-theme-toggle
                            aria-label="Switch color theme"
                            title="Switch color theme">
                        <i class="bi bi-moon-stars" data-theme-icon aria-hidden="true"></i>
                    </button>

                    <div class="dropdown">
                        <button class="icon-button"
                                type="button"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                                aria-label="Notifications">
                            <span class="notification-dot"></span>
                            <i class="bi bi-bell" aria-hidden="true"></i>
                        </button>

                        <div class="dropdown-menu dropdown-menu-end notification-menu">
                            <div class="dropdown-header fw-bold text-body">Notifications</div>
                            <a class="dropdown-item" href="{{ route('pelanggan.index') }}">
                                <span class="notification-title">Lihat data pelanggan</span>
                                <span class="notification-time">Laundry Kita</span>
                            </a>
                            <a class="dropdown-item" href="{{ route('layanan.index') }}">
                                <span class="notification-title">Lihat data layanan</span>
                                <span class="notification-time">Laundry Kita</span>
                            </a>
                        </div>
                    </div>

                    <div class="dropdown">
                        <button class="profile-button dropdown-toggle"
                                type="button"
                                data-bs-toggle="dropdown"
                                aria-expanded="false">
                            <img
                                src="{{ asset('assets-admin/images/png/logo-laundry.png') }}"
                                alt="Logo Laundry Kita"
                                style="width:50px;height:50px;object-fit:contain;">
                            <span class="profile-name d-none d-sm-inline">Admin</span>
                        </button>

                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <a class="dropdown-item" href="{{ route('admin.index') }}">
                                    Data Admin
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('admin.dashboard') }}">
                                    Dashboard
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </nav>
