
@extends('layouts.admin.app')

@section('content')
<div class="container-fluid px-3 px-lg-4 py-4">

    <div class="page-heading mb-4">
        <div class="page-heading-copy">
            <span class="page-icon">
                <i class="bi bi-person-vcard"></i>
            </span>
            <div>
                <h1 class="h3 mb-1">Detail Pelanggan</h1>
                <p class="text-muted mb-0">
                    Informasi pelanggan Laundry Kita.
                </p>
            </div>
        </div>
    </div>

    <div class="panel">
        <div class="panel-header">
            <h2 class="h5 mb-0 section-title">
                <i class="bi bi-table"></i>
                Data Pelanggan
            </h2>
        </div>

        <div class="table-responsive">
            <table class="table align-middle mb-0">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Pelanggan</th>
                        <th>Nomor HP</th>
                        <th>Alamat</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>{{ $dataPelanggan->nama }}</td>
                        <td>{{ $dataPelanggan->no_hp }}</td>
                        <td>{{ $dataPelanggan->alamat }}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="p-3">
            <a href="{{ route('admin.dashboard') }}"
               class="btn btn-secondary btn-sm">
                <i class="bi bi-arrow-left"></i>
                Kembali ke Dashboard
            </a>
        </div>
    </div>

</div>
@endsection
