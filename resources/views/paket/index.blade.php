@extends('layouts.admin.app')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2>Data Paket Laundry</h2>
            <p class="text-muted mb-0">Kelola paket Laundry Kita.</p>
        </div>

        <a href="{{ route('paket-laundry.create') }}"
           class="btn btn-primary">
            + Tambah Paket
        </a>
    </div>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session('success') }}
            <button type="button" class="btn-close"
                data-bs-dismiss="alert"></button>
        </div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>No.</th>
                            <th>Nama Paket</th>
                            <th>Layanan</th>
                            <th>Berat</th>
                            <th>Harga</th>
                            <th>Deskripsi</th>
                            <th width="160">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($paket as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama_paket }}</td>
                                <td>
                                    {{ $item->layanan->nama_layanan ?? '-' }}
                                </td>
                                <td>{{ $item->berat_kg }} kg</td>
                                <td>
                                    Rp {{ number_format($item->harga_paket, 0, ',', '.') }}
                                </td>
                                <td>{{ $item->deskripsi ?? '-' }}</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="{{ route('paket-laundry.edit', $item->paket_id) }}"
                                           class="btn btn-warning btn-sm">
                                            Edit
                                        </a>

                                        <form action="{{ route('paket-laundry.destroy', $item->paket_id) }}"
                                              method="POST"
                                              onsubmit="return confirm('Yakin ingin menghapus paket ini?')">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit"
                                                class="btn btn-danger btn-sm">
                                                Hapus
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center py-4">
                                    Belum ada data paket laundry.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
