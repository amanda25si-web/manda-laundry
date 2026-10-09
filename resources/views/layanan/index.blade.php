@extends('admin.dashboard')

@section('content')
<div class="container-fluid px-3 px-lg-4 py-4">

    <div class="page-heading mb-4">
        <div class="page-heading-copy">
            <span class="page-icon">
                <i class="bi bi-basket"></i>
            </span>
            <div>
                <h1 class="h3 mb-1">Data Layanan</h1>
                <p class="text-muted mb-0">
                    Kelola nama dan harga layanan Laundry Kita.
                </p>
            </div>
        </div>

        <div class="heading-actions">
            <a href="{{ route('layanan.create') }}"
                class="btn btn-primary btn-sm">
                <i class="bi bi-plus-circle"></i>
                Tambah Layanan
            </a>
        </div>
    </div>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show"
            role="alert">
            <i class="bi bi-check-circle me-2"></i>
            {{ session('success') }}
            <button type="button" class="btn-close"
                data-bs-dismiss="alert"></button>
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show"
            role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close"
                data-bs-dismiss="alert"></button>
        </div>
    @endif

    <div class="panel">
        <div class="panel-header">
            <div>
                <h2 class="h5 mb-1 section-title">
                    <i class="bi bi-table"></i>
                    <span>Daftar Layanan</span>
                </h2>
                <p class="text-muted mb-0">
                    Total layanan: {{ $dataLayanan->count() }}
                </p>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table align-middle mb-0">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Layanan</th>
                        <th>Harga</th>
                        <th class="text-end">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($dataLayanan as $layanan)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $layanan->nama_layanan }}</td>
                            <td>
                                Rp{{ number_format($layanan->harga, 0, ',', '.') }}
                            </td>
                            <td class="text-end">
                                <div class="d-flex justify-content-end gap-2">
                                    <a href="{{ route('layanan.edit', $layanan->layanan_id) }}"
                                        class="btn btn-warning btn-sm">
                                        <i class="bi bi-pencil-square"></i>
                                        Edit
                                    </a>

                                    <form
                                        action="{{ route('layanan.destroy', $layanan->layanan_id) }}"
                                        method="POST"
                                        onsubmit="return confirm('Yakin ingin menghapus layanan ini?')">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                            class="btn btn-danger btn-sm">
                                            <i class="bi bi-trash"></i>
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4"
                                class="text-center py-4 text-muted">
                                <i class="bi bi-inbox fs-3 d-block mb-2"></i>
                                Belum ada data layanan.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
