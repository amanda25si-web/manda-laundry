@extends('admin.dashboard')

@section('content')
<div class="container-fluid px-3 px-lg-4 py-4">

    <div class="page-heading mb-4">
        <div class="page-heading-copy">
            <span class="page-icon">
                <i class="bi bi-pencil-square"></i>
            </span>
            <div>
                <p class="eyebrow mb-1">Manajemen Data</p>
                <h1 class="h3 mb-1">Edit Layanan</h1>
                <p class="text-muted mb-0">
                    Perbarui nama dan harga layanan Laundry Kita.
                </p>
            </div>
        </div>
    </div>

    <div class="panel">
        <div class="panel-header">
            <h2 class="h5 mb-0 section-title">
                Form Edit Layanan
            </h2>
        </div>

        <div class="p-4">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form
                action="{{ route('layanan.update', $dataLayanan->layanan_id) }}"
                method="POST">

                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="nama_layanan" class="form-label">
                        Nama Layanan
                    </label>

                    <input
                        type="text"
                        name="nama_layanan"
                        id="nama_layanan"
                        class="form-control"
                        value="{{ old('nama_layanan', $dataLayanan->nama_layanan) }}"
                        placeholder="Masukkan nama layanan"
                        required>

                    @error('nama_layanan')
                        <small class="text-danger">{{ $message }}</small>
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
                        class="form-control"
                        value="{{ old('harga', $dataLayanan->harga) }}"
                        min="0"
                        placeholder="Masukkan harga layanan"
                        required>

                    @error('harga')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-save me-1"></i>
                        Simpan Perubahan
                    </button>

                    <a href="{{ route('layanan.index') }}"
                        class="btn btn-secondary">
                        Kembali
                    </a>
                </div>

            </form>
        </div>
    </div>

</div>
@endsection

