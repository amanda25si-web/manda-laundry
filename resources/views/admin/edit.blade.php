```blade
@extends('admin.dashboard')

@section('content')
<div class="container-fluid px-3 px-lg-4 py-4">

    {{-- Judul Halaman --}}
    <div class="page-heading mb-4">
        <div class="page-heading-copy">
            <span class="page-icon">
                <i class="bi bi-pencil-square"></i>
            </span>
            <div>
                <p class="eyebrow mb-1">Manajemen Data</p>
                <h1 class="h3 mb-1">Edit Admin</h1>
                <p class="text-muted mb-0">
                    Perbarui informasi administrator Laundry Kita.
                </p>
            </div>
        </div>
    </div>

    {{-- Notifikasi Error --}}
    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="bi bi-exclamation-triangle me-2"></i>
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

    {{-- Form Edit Admin --}}
    <div class="panel">
        <div class="panel-header">
            <div>
                <h2 class="h5 mb-1 section-title">
                    <i class="bi bi-person-gear"></i>
                    <span>Form Edit Admin</span>
                </h2>
                <p class="text-muted mb-0">
                    Ubah data pada kolom yang diperlukan.
                </p>
            </div>
        </div>

        <div class="p-3 p-lg-4">
            <form action="{{ route('admin.update', $dataAdmin->admin_id) }}"
                method="POST">

                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="nama" class="form-label">
                        Nama Lengkap
                    </label>
                    <input
                        type="text"
                        name="nama"
                        id="nama"
                        class="form-control @error('nama') is-invalid @enderror"
                        value="{{ old('nama', $dataAdmin->nama) }}"
                        placeholder="Masukkan nama lengkap"
                        required
                    >
                    @error('nama')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="username" class="form-label">
                        Username
                    </label>
                    <input
                        type="text"
                        name="username"
                        id="username"
                        class="form-control @error('username') is-invalid @enderror"
                        value="{{ old('username', $dataAdmin->username) }}"
                        placeholder="Masukkan username"
                        required
                    >
                    @error('username')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">
                        Email
                    </label>
                    <input
                        type="email"
                        name="email"
                        id="email"
                        class="form-control @error('email') is-invalid @enderror"
                        value="{{ old('email', $dataAdmin->email) }}"
                        placeholder="Masukkan alamat email"
                        required
                    >
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="no_hp" class="form-label">
                        Nomor HP
                    </label>
                    <input
                        type="text"
                        name="no_hp"
                        id="no_hp"
                        class="form-control @error('no_hp') is-invalid @enderror"
                        value="{{ old('no_hp', $dataAdmin->no_hp) }}"
                        placeholder="Masukkan nomor HP"
                        required
                    >
                    @error('no_hp')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-flex flex-wrap gap-2">
                    <a href="{{ route('admin.index') }}"
                        class="btn btn-light border">
                        <i class="bi bi-arrow-left"></i>
                        Kembali
                    </a>

                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-save"></i>
                        Simpan Perubahan
                    </button>
                </div>

            </form>
        </div>
    </div>

</div>
@endsection

