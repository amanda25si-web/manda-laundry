@extends('admin.dashboard')

@section('content')
<div class="container-fluid px-3 px-lg-4 py-4">

    <div class="page-heading mb-4">
        <div class="page-heading-copy">
            <span class="page-icon">
                <i class="bi bi-plus-circle"></i>
            </span>
            <div>
                <p class="eyebrow mb-1">Manajemen Data</p>
                <h1 class="h3 mb-1">Tambah Layanan</h1>
                <p class="text-muted mb-0">
                    Tambahkan jenis layanan Laundry Kita.
                </p>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show"
            role="alert">
            <strong>Periksa kembali data yang dimasukkan.</strong>
            <ul class="mb-0 mt-2">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close"
                data-bs-dismiss="alert"></button>
        </div>
    @endif

    <div class="panel">
        <div class="panel-header">
            <div>
                <h2 class="h5 mb-1 section-title">
                    <i class="bi bi-card-list"></i>
                    <span>Form Tambah Layanan</span>
                </h2>
                <p class="text-muted mb-0">
                    Isi nama layanan dan harga.
                </p>
            </div>
        </div>

        <div class="p-3 p-lg-4">
            <form action="{{ route('layanan.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="nama_layanan" class="form-label">
                        Nama Layanan
                    </label>
                    <input
                        type="text"
                        name="nama_layanan"
                        id="nama_layanan"
                        class="form-control @error('nama_layanan') is-invalid @enderror"
                        value="{{ old('nama_layanan') }}"
                        placeholder="Contoh: Cuci Setrika"
                        required
                    >
                    @error('nama_layanan')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="harga" class="form-label">
                        Harga (Rp)
                    </label>
                    <input
                        type="number"
                        name="harga"
                        id="harga"
                        class="form-control @error('harga') is-invalid @enderror"
                        value="{{ old('harga') }}"
                        placeholder="Contoh: 7000"
                        min="0"
                        step="0.01"
                        required
                    >
                    @error('harga')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <small class="text-muted">
                        Masukkan harga per kilogram jika layanan dihitung berdasarkan berat.
                    </small>
                </div>

                <div class="d-flex flex-wrap gap-2">
                    <a href="{{ route('layanan.index') }}"
                        class="btn btn-light border">
                        <i class="bi bi-arrow-left"></i>
                        Kembali
                    </a>

                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-save"></i>
                        Simpan Layanan
                    </button>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection

