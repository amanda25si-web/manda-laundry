
@extends('admin.dashboard')

@section('content')
<div class="container-fluid px-3 px-lg-4 py-4">
    <div class="page-heading mb-4">
        <div class="page-heading-copy">
            <span class="page-icon">
                <i class="bi bi-person-plus"></i>
            </span>
            <div>
                <p class="eyebrow mb-1">Manajemen Admin</p>
                <h1 class="h3 mb-1">Tambah Admin</h1>
                <p class="text-muted mb-0">Tambahkan akun admin baru Laundry Kita.</p>
            </div>
        </div>
    </div>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Data belum berhasil disimpan.</strong>
            <ul class="mb-0 mt-2">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="panel">
        <div class="panel-header">
            <h2 class="h5 mb-0 section-title">
                <i class="bi bi-person-vcard"></i>
                Form Tambah Admin
            </h2>
        </div>

        <div class="p-3 p-lg-4">
            <form action="{{ route('admin.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Lengkap</label>
                    <input type="text" id="nama" name="nama"
                        class="form-control @error('nama') is-invalid @enderror"
                        value="{{ old('nama') }}" required>
                    @error('nama')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" id="username" name="username"
                        class="form-control @error('username') is-invalid @enderror"
                        value="{{ old('username') }}" required>
                    @error('username')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" name="email"
                        class="form-control @error('email') is-invalid @enderror"
                        value="{{ old('email') }}" required>
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="no_hp" class="form-label">Nomor HP</label>
                    <input type="text" id="no_hp" name="no_hp"
                        class="form-control @error('no_hp') is-invalid @enderror"
                        value="{{ old('no_hp') }}" required>
                    @error('no_hp')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-flex flex-wrap gap-2">
                    <a href="{{ route('admin.index') }}"
                        class="btn btn-outline-secondary">
                        <i class="bi bi-arrow-left"></i> Kembali
                    </a>
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-save"></i> Simpan Admin
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
