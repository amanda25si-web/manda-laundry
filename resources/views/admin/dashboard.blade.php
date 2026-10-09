```blade
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Laundry Kita admin dashboard">
    <title>Dashboard | Laundry Kita</title>

    <link rel="stylesheet" href="{{ asset('assets-admin/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-admin/vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-admin/css/style.css') }}">
</head>

<body>
<div class="admin-shell">
    <div class="sidebar-backdrop" data-sidebar-close></div>

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

    {{-- MAIN --}}
    <div class="admin-main">

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

        {{-- DASHBOARD CONTENT --}}
        <main class="dashboard-content">
            @hasSection('content')
                @yield('content')
            @else
                <div class="container-fluid px-3 px-lg-4 py-4">

                    {{-- PAGE HEADING --}}
                    <div class="page-heading">
                        <div class="page-heading-copy">
                            <span class="page-icon">
                                <i class="bi bi-speedometer2" aria-hidden="true"></i>
                            </span>
                            <div>
                                <p class="eyebrow mb-1">Overview</p>
                                <h1 class="h3 mb-1">Dashboard</h1>
                                <p class="text-muted mb-0">
                                    Monitor performance, sales, and customers from Laundry Kita.
                                </p>
                            </div>
                        </div>
                        <div class="heading-actions">
                            <a href="{{ route('pelanggan.index') }}" class="btn btn-outline-secondary btn-sm">
                                <i class="bi bi-people" aria-hidden="true"></i> Data Pelanggan
                            </a>
                            <a href="{{ route('layanan.index') }}" class="btn btn-primary btn-sm">
                                <i class="bi bi-basket" aria-hidden="true"></i> Data Layanan
                            </a>
                        </div>
                    </div>

                    {{-- TIGA KOTAK AWAL: TETAP DIPERTAHANKAN --}}
                    <section class="row g-3 mt-1" aria-label="Dashboard metrics">

                        <div class="col-12 col-sm-6 col-xl-3">
                            <article class="metric-card metric-primary">
                                <div class="metric-top">
                                    <span class="metric-label">Revenue</span>
                                    <span class="metric-icon"><i class="bi bi-currency-dollar"></i></span>
                                </div>
                                <div class="metric-value">$48,240</div>
                                <div class="metric-meta">
                                    <span class="text-success">+12.5%</span>
                                    <span>from last month</span>
                                </div>
                            </article>
                        </div>

                        <div class="col-12 col-sm-6 col-xl-3">
                            <article class="metric-card metric-success">
                                <div class="metric-top">
                                    <span class="metric-label">Orders</span>
                                    <span class="metric-icon"><i class="bi bi-bag-check"></i></span>
                                </div>
                                <div class="metric-value">1,284</div>
                                <div class="metric-meta">
                                    <span class="text-success">+8.2%</span>
                                    <span>new orders</span>
                                </div>
                            </article>
                        </div>

                        <div class="col-12 col-sm-6 col-xl-3">
                            <article class="metric-card metric-warning">
                                <div class="metric-top">
                                    <span class="metric-label">Customers</span>
                                    <span class="metric-icon"><i class="bi bi-people"></i></span>
                                </div>
                                <div class="metric-value">8,742</div>
                                <div class="metric-meta">
                                    <span class="text-success">+5.1%</span>
                                    <span>active users</span>
                                </div>
                            </article>
                        </div>

                        <div class="col-12 col-sm-6 col-xl-3">
                            <article class="metric-card metric-danger">
                                <div class="metric-top">
                                    <span class="metric-label">Tickets</span>
                                    <span class="metric-icon"><i class="bi bi-life-preserver"></i></span>
                                </div>
                                <div class="metric-value">36</div>
                                <div class="metric-meta">
                                    <span class="text-danger">3 urgent</span>
                                    <span>need review</span>
                                </div>
                            </article>
                        </div>

                    </section>

                    {{-- GRAFIK DAN TEAM ACTIVITY: TETAP DIPERTAHANKAN --}}
                    <section class="row g-3 mt-1">

                        <div class="col-12 col-xl-8">
                            <div class="panel">
                                <div class="panel-header">
                                    <div>
                                        <h2 class="h5 mb-1 section-title">
                                            <i class="bi bi-graph-up-arrow"></i>
                                            <span>Sales Performance</span>
                                        </h2>
                                        <p class="text-muted mb-0">
                                            Monthly revenue compared with operational targets.
                                        </p>
                                    </div>
                                    <a class="btn btn-light btn-sm" href="{{ route('pelanggan.index') }}">
                                        View Details
                                    </a>
                                </div>

                                <div class="chart-bars" aria-label="Sales performance chart">
                                    <div class="chart-column bar-42"><span></span><small>Jan</small></div>
                                    <div class="chart-column bar-58"><span></span><small>Feb</small></div>
                                    <div class="chart-column bar-51"><span></span><small>Mar</small></div>
                                    <div class="chart-column bar-72"><span></span><small>Apr</small></div>
                                    <div class="chart-column bar-66"><span></span><small>May</small></div>
                                    <div class="chart-column bar-83"><span></span><small>Jun</small></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-xl-4">
                            <div class="panel h-100">
                                <div class="panel-header">
                                    <div>
                                        <h2 class="h5 mb-1 section-title">
                                            <i class="bi bi-activity"></i>
                                            <span>Team Activity</span>
                                        </h2>
                                        <p class="text-muted mb-0">Recent operational updates.</p>
                                    </div>
                                </div>

                                <div class="activity-list">
                                    <div class="activity-item">
                                        <span class="activity-dot bg-primary"></span>
                                        <div>
                                            <p class="mb-1 fw-semibold">Customer data management</p>
                                            <p class="text-muted small mb-0">Manage customer information in the customer menu.</p>
                                        </div>
                                    </div>
                                    <div class="activity-item">
                                        <span class="activity-dot bg-success"></span>
                                        <div>
                                            <p class="mb-1 fw-semibold">Laundry services</p>
                                            <p class="text-muted small mb-0">Manage available services and prices.</p>
                                        </div>
                                    </div>
                                    <div class="activity-item">
                                        <span class="activity-dot bg-warning"></span>
                                        <div>
                                            <p class="mb-1 fw-semibold">Admin data</p>
                                            <p class="text-muted small mb-0">Manage admin information in the admin menu.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </section>

                    {{-- TABEL RECENT USERS DIGANTI DATA PELANGGAN --}}
                    <section class="panel mt-3">
                        <div class="panel-header">
                            <div>
                                <h2 class="h5 mb-1 section-title">
                                    <i class="bi bi-people"></i>
                                    <span>Data Pelanggan Terbaru</span>
                                </h2>
                                <p class="text-muted mb-0">
                                    Lima data pelanggan terbaru Laundry Kita.
                                </p>
                            </div>
                            <a class="btn btn-outline-secondary btn-sm"
                               href="{{ route('pelanggan.index') }}">
                                Semua Pelanggan
                            </a>
                        </div>

                        <div class="table-responsive">
                            <table class="table align-middle mb-0">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Pelanggan</th>
                                        <th>No. HP</th>
                                        <th>Alamat</th>
                                        <th class="text-end">Aksi</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @forelse ($dataPelanggan ?? [] as $pelanggan)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $pelanggan->nama }}</td>
                                            <td>{{ $pelanggan->no_hp }}</td>
                                            <td>{{ $pelanggan->alamat }}</td>
                                            <td class="text-end">
                                                <a class="btn btn-light btn-sm"
                                                   href="{{ route('pelanggan.index') }}">
                                                    <i class="bi bi-eye"></i> View
                                                </a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="text-center py-4 text-muted">
                                                Belum ada data pelanggan.
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </section>

                </div>
            @endif
        </main>

        {{-- FOOTER --}}
        <footer class="admin-footer">
            <div class="container-fluid px-3 px-lg-4">
                <span>
                    Laundry Kita &copy; {{ date('Y') }}
                    •
                    <a target="_blank" rel="noopener noreferrer"
                       class="fw-bold text-success"
                       href="https://themewagon.com">ThemeWagon</a>
                </span>
                <span>Professional dashboard template.</span>
            </div>
        </footer>

    </div>
</div>

<script src="{{ asset('assets-admin/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets-admin/js/main.js') }}"></script>
</body>
</html>
```
