
@extends('layouts.admin.app')

@section('content')
<div class="container-fluid px-4 py-4">

    <div class="mb-4 p-4 bg-light rounded">
        <h2 class="fw-bold mb-1">Tambah Promo</h2>
        <p class="text-muted mb-0">
            Masukkan informasi promo Laundry Kita.
        </p>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Periksa kembali data berikut:</strong>
            <ul class="mb-0 mt-2">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card border-0 shadow-sm">
        <div class="card-body p-4">
            <form action="{{ route('promo.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="nama_promo" class="form-label">Nama Promo</label>
                    <input type="text" name="nama_promo" id="nama_promo"
                           class="form-control @error('nama_promo') is-invalid @enderror"
                           value="{{ old('nama_promo') }}"
                           placeholder="Contoh: Promo Hemat Mahasiswa"
                           maxlength="100" required>
                    @error('nama_promo')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="paket_id" class="form-label">Paket Laundry</label>
                    <select name="paket_id" id="paket_id"
                            class="form-select @error('paket_id') is-invalid @enderror"
                            required>
                        <option value="">-- Pilih Paket Laundry --</option>
                        @foreach ($paket as $item)
                            <option value="{{ $item->paket_id }}"
                                {{ old('paket_id') == $item->paket_id ? 'selected' : '' }}>
                                {{ $item->nama_paket }}
                            </option>
                        @endforeach
                    </select>
                    @error('paket_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea name="deskripsi" id="deskripsi" rows="3"
                              class="form-control @error('deskripsi') is-invalid @enderror"
                              placeholder="Jelaskan promo yang ditawarkan">{{ old('deskripsi') }}</textarea>
                    @error('deskripsi')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="diskon_persen" class="form-label">Diskon (%)</label>
                    <input type="number" name="diskon_persen" id="diskon_persen"
                           class="form-control @error('diskon_persen') is-invalid @enderror"
                           value="{{ old('diskon_persen') }}"
                           min="1" max="100" placeholder="Contoh: 20" required>
                    @error('diskon_persen')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="tanggal_mulai" class="form-label">Tanggal Mulai</label>
                        <input type="date" name="tanggal_mulai" id="tanggal_mulai"
                               class="form-control @error('tanggal_mulai') is-invalid @enderror"
                               value="{{ old('tanggal_mulai') }}" required>
                        @error('tanggal_mulai')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="tanggal_berakhir" class="form-label">Tanggal Berakhir</label>
                        <input type="date" name="tanggal_berakhir" id="tanggal_berakhir"
                               class="form-control @error('tanggal_berakhir') is-invalid @enderror"
                               value="{{ old('tanggal_berakhir') }}" required>
                        @error('tanggal_berakhir')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="d-flex gap-2 mt-4">
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-save me-1"></i> Simpan Promo
                    </button>

                    <a href="{{ route('promo.index') }}" class="btn btn-secondary">
                        Kembali
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
