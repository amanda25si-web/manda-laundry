
@extends('layouts.admin.app')

@section('content')
<div class="container-fluid px-4 py-4">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold mb-1">
                <i class="bi bi-tags me-2"></i>Data Promo
            </h2>
            <p class="text-muted mb-0">
                Kelola promo dan penawaran spesial Laundry Kita.
            </p>
        </div>

        <a href="{{ route('promo.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle me-1"></i> Tambah Promo
        </a>
    </div>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="bi bi-check-circle me-2"></i>
            {{ session('success') }}
            <button type="button" class="btn-close"
                    data-bs-dismiss="alert"></button>
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Terjadi kesalahan:</strong>
            <ul class="mb-0 mt-2">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @php
        $today = now()->toDateString();

        $activeCount = $promo->filter(
            fn ($item) => $item->tanggal_mulai <= $today
                && $item->tanggal_berakhir >= $today
        )->count();

        $upcomingCount = $promo->filter(
            fn ($item) => $item->tanggal_mulai > $today
        )->count();

        $expiredCount = $promo->filter(
            fn ($item) => $item->tanggal_berakhir < $today
        )->count();
    @endphp

    <div class="row g-3 mb-4">
        
    <div class="card border-0 shadow-sm">
        <div class="card-header bg-white py-3">
            <h5 class="fw-bold mb-0">Daftar Promo Laundry</h5>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>No.</th>
                            <th>Nama Promo</th>
                            <th>Paket Laundry</th>
                            <th>Diskon</th>
                            <th>Tanggal Mulai</th>
                            <th>Tanggal Berakhir</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($promo as $item)
                            @php
                                if ($item->tanggal_berakhir < $today) {
                                    $status = 'Berakhir';
                                    $badge = 'bg-secondary';
                                } elseif ($item->tanggal_mulai > $today) {
                                    $status = 'Akan Datang';
                                    $badge = 'bg-warning text-dark';
                                } else {
                                    $status = 'Aktif';
                                    $badge = 'bg-success';
                                }
                            @endphp

                            <tr>
                                <td>{{ $loop->iteration }}</td>

                                <td>
                                    <span class="fw-semibold">
                                        {{ $item->nama_promo }}
                                    </span>

                                    @if ($item->deskripsi)
                                        <div class="small text-muted">
                                            {{ $item->deskripsi }}
                                        </div>
                                    @endif
                                </td>

                                <td>{{ $item->nama_paket }}</td>

                                <td>
                                    <span class="badge bg-danger">
                                        {{ $item->diskon_persen }}%
                                    </span>
                                </td>

                                <td>
                                    {{ \Carbon\Carbon::parse($item->tanggal_mulai)->format('d/m/Y') }}
                                </td>

                                <td>
                                    {{ \Carbon\Carbon::parse($item->tanggal_berakhir)->format('d/m/Y') }}
                                </td>

                                <td>
                                    <span class="badge {{ $badge }}">
                                        {{ $status }}
                                    </span>
                                </td>

                                <td>
                                    <a href="{{ route('promo.edit', $item->promo_id) }}"
                                       class="btn btn-warning btn-sm"
                                       title="Edit">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>

                                    <form action="{{ route('promo.destroy', $item->promo_id) }}"
                                          method="POST"
                                          class="d-inline"
                                          onsubmit="return confirm('Yakin ingin menghapus promo ini?')">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                                class="btn btn-danger btn-sm"
                                                title="Hapus">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="text-center py-5">
                                    <i class="bi bi-tags fs-1 text-secondary"></i>
                                    <h5 class="mt-3">Belum Ada Data Promo</h5>
                                    <p class="text-muted">
                                        Klik tombol Tambah Promo untuk membuat promo baru.
                                    </p>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="text-muted small mt-3">
                Total {{ $promo->count() }} data promo
            </div>
        </div>
    </div>
</div>
@endsection
