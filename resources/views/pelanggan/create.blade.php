```blade
@extends('admin.dashboard')

@section('content')
<div class="container-fluid px-3 px-lg-4 py-4">

    <div class="page-heading mb-4">
        <div class="page-heading-copy">
            <span class="page-icon">
                <i class="bi bi-person-plus"></i>
            </span>
            <div>
                <h1 class="h3 mb-1">Tambah Pelanggan</h1>
                <p class="text-muted mb-0">
                    Tambahkan data pelanggan Laundry Kita.
                </p>
            </div>
        </div>
    </div>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show"
            role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close"
                data-bs-dismiss="alert"></button>
        </div>
    @endif

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
                    <i class="bi bi-person-vcard"></i>
                    <span>Form Tambah Pelanggan</span>
                </h2>
                <p class="text-muted mb-0">
                    Isi informasi pelanggan dengan benar.
                </p>
            </div>
        </div>

        <div class="p-3 p-lg-4">
            <form action="{{ route('pelanggan.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="nama" class="form-label">
                        Nama Pelanggan
                    </label>
                    <input
                        type="text"
                        name="nama"
                        id="nama"
                        class="form-control @error('nama') is-invalid @enderror"
                        value="{{ old('nama') }}"
                        placeholder="Masukkan nama pelanggan"
                        required
                    >
                    @error('nama')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="no_hp" class="form-label">
                        Nomor HP
                    </label>
                    <input
                        type="text"
                        name="no_hp"
                        id="no_hp"
                        class="form-control @error('no_hp') is-invalid @enderror"
                        value="{{ old('no_hp') }}"
                        placeholder="Masukkan nomor HP"
                        required
                    >
                    @error('no_hp')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="alamat" class="form-label">
                        Alamat
                    </label>
                    <textarea
                        name="alamat"
                        id="alamat"
                        rows="4"
                        class="form-control @error('alamat') is-invalid @enderror"
                        placeholder="Masukkan alamat pelanggan"
                        required
                    >{{ old('alamat') }}</textarea>
                    @error('alamat')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-flex flex-wrap gap-2">
                    <a href="{{ route('pelanggan.index') }}"
                        class="btn btn-light border">
                        <i class="bi bi-arrow-left"></i>
                        Kembali
                    </a>

                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-save"></i>
                        Simpan Pelanggan
                    </button>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection

