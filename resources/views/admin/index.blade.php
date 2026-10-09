
@extends('admin.dashboard')

@section('content')
<div class="container-fluid px-3 px-lg-4 py-4">

    <div class="page-heading mb-4">
        <div class="page-heading-copy">
            <span class="page-icon">
                <i class="bi bi-people"></i>
            </span>
            <div>
                <h1 class="h3 mb-1">Data Admin</h1>
                <p class="text-muted mb-0">
                    Kelola data administrator Laundry Kita.
                </p>
            </div>
        </div>

        <div class="heading-actions">
            <a href="{{ route('admin.create') }}" class="btn btn-primary btn-sm">
                <i class="bi bi-person-plus"></i> Tambah Admin
            </a>
        </div>
    </div>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="bi bi-check-circle me-2"></i>
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <div class="panel">
        <div class="panel-header">
            <div>
                <h2 class="h5 mb-1 section-title">
                    <i class="bi bi-table"></i>
                    <span>Daftar Admin</span>
                </h2>
                <p class="text-muted mb-0">
                    Total data admin: {{ $dataAdmin->count() }} orang
                </p>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table align-middle mb-0">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>No. HP</th>
                        <th class="text-end">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($dataAdmin as $admin)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $admin->nama }}</td>
                            <td>{{ $admin->username }}</td>
                            <td>{{ $admin->email }}</td>
                            <td>{{ $admin->no_hp }}</td>
                            <td class="text-end">
                                <div class="d-flex justify-content-end gap-2">
                                    <a href="{{ route('admin.edit', $admin->admin_id) }}"
                                        class="btn btn-warning btn-sm">
                                        <i class="bi bi-pencil-square"></i> Edit
                                    </a>

                                    <form action="{{ route('admin.destroy', $admin->admin_id) }}"
                                        method="POST"
                                        onsubmit="return confirm('Yakin ingin menghapus data admin ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="bi bi-trash"></i> Hapus
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center py-4 text-muted">
                                <i class="bi bi-inbox fs-3 d-block mb-2"></i>
                                Belum ada data admin.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
