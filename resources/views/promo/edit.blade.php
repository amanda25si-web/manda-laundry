@extends('layouts.admin.app')

@section('title', 'Edit Promo - Laundry Kita')

@section('content')
<div class="container-fluid px-4 py-4">

    {{-- HEADER HALAMAN --}}
    <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
        <div>
            <h1 class="h3 mb-1 fw-bold">Edit Promo</h1>
            <p class="text-muted mb-0">
                Perbarui informasi promo Laundry Kita.
            </p>
        </div>

        <a href="{{ route('promo.index') }}" class="btn btn-outline-secondary">
            <i class="bi bi-arrow-left me-1"></i>
            Kembali
        </a>
    </div>

    {{-- PESAN ERROR --}}
    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong><i class="bi bi-exclamation-circle me-1"></i> Periksa kembali data berikut:</strong>
            <ul class="mb-0 mt-2">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert"
                    aria-label="Close"></button>
        </div>
    @endif

    {{-- FORM EDIT PROMO --}}
    <div class="card border-0 shadow-sm">
        <div class="card-header bg-white py-3">
            <h5 class="mb-0 fw-semibold">
                <i class="bi bi-pencil-square me-2"></i>
                Form Perubahan Promo
            </h5>
        </div>

        <div class="card-body p-4">
            <form action="{{ route('promo.update', $promo->promo_id) }}"
                  method="POST">
                @csrf
                @method('PUT')

                <div class="row">
                    {{-- NAMA PROMO --}}
                    <div class="col-md-6 mb-3">
                        <label for="nama_promo" class="form-label fw-semibold">
                            Nama Promo
                        </label>
                        <input type="text"
                               name="nama_promo"
                               id="nama_promo"
                               class="form-control @error('nama_promo') is-invalid @enderror"
                               value="{{ old('nama_promo', $promo->nama_promo) }}"
                               maxlength="100"
                               required>
                        @error('nama_promo')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- PAKET LAUNDRY --}}
                    <div class="col-md-6 mb-3">
                        <label for="paket_id" class="form-label fw-semibold">
                            Paket Laundry
                        </label>
                        <select name="paket_id"
                                id="paket_id"
                                class="form-select @error('paket_id') is-invalid @enderror"
                                required>
                            <option value="">-- Pilih Paket Laundry --</option>
                            @foreach ($paket as $item)
                                <option value="{{ $item->paket_id }}"
                                    {{ old('paket_id', $promo->paket_id) == $item->paket_id ? 'selected' : '' }}>
                                    {{ $item->nama_paket }}
                                </option>
                            @endforeach
                        </select>
                        @error('paket_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- DISKON --}}
                    <div class="col-md-6 mb-3">
                        <label for="diskon_persen" class="form-label fw-semibold">
                            Diskon (%)
                        </label>
                        <input type="number"
                               name="diskon_persen"
                               id="diskon_persen"
                               class="form-control @error('diskon_persen') is-invalid @enderror"
                               value="{{ old('diskon_persen', $promo->diskon_persen) }}"
                               min="1"
                               max="100"
                               required>
                        @error('diskon_persen')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- TANGGAL MULAI --}}
                    <div class="col-md-6 mb-3">
                        <label for="tanggal_mulai" class="form-label fw-semibold">
                            Tanggal Mulai
                        </label>
                        <input type="date"
                               name="tanggal_mulai"
                               id="tanggal_mulai"
                               class="form-control @error('tanggal_mulai') is-invalid @enderror"
                               value="{{ old('tanggal_mulai', $promo->tanggal_mulai) }}"
                               required>
                        @error('tanggal_mulai')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- TANGGAL BERAKHIR --}}
                    <div class="col-md-6 mb-3">
                        <label for="tanggal_berakhir" class="form-label fw-semibold">
                            Tanggal Berakhir
                        </label>
                        <input type="date"
                               name="tanggal_berakhir"
                               id="tanggal_berakhir"
                               class="form-control @error('tanggal_berakhir') is-invalid @enderror"
                               value="{{ old('tanggal_berakhir', $promo->tanggal_berakhir) }}"
                               min="{{ old('tanggal_mulai', $promo->tanggal_mulai) }}"
                               required>
                        @error('tanggal_berakhir')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- DESKRIPSI --}}
                    <div class="col-12 mb-3">
                        <label for="deskripsi" class="form-label fw-semibold">
                            Deskripsi Promo
                        </label>
                        <textarea name="deskripsi"
                                  id="deskripsi"
                                  rows="4"
                                  class="form-control @error('deskripsi') is-invalid @enderror"
                                  placeholder="Jelaskan promo yang ditawarkan">{{ old('deskripsi', $promo->deskripsi) }}</textarea>
                        @error('deskripsi')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                {{-- TOMBOL --}}
                <div class="d-flex flex-wrap gap-2 mt-3 pt-3 border-top">
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-save me-1"></i>
                        Simpan Perubahan
                    </button>

                    <a href="{{ route('promo.index') }}" class="btn btn-light border">
                        Batal
                    </a>
                </div>

            </form>
        </div>
    </div>

</div>
@endsection

