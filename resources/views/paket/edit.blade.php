@extends('layouts.admin.app')

@section('content')
<div class="container py-4">
    <div class="card shadow-sm mx-auto" style="max-width: 750px;">
        <div class="card-header bg-warning">
            <h4 class="mb-0">Edit Paket Laundry</h4>
        </div>

        <div class="card-body p-4">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('paket-laundry.update', $paket->paket_id) }}"
                  method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Nama Paket</label>
                    <input type="text" name="nama_paket"
                           class="form-control"
                           value="{{ old('nama_paket', $paket->nama_paket) }}"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Layanan</label>
                    <select name="layanan_id" class="form-select" required>
                        <option value="">Pilih Layanan</option>

                        @foreach ($layanan as $item)
                            <option value="{{ $item->layanan_id }}"
                                @selected(old('layanan_id', $paket->layanan_id) == $item->layanan_id)>
                                {{ $item->nama_layanan }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control"
                              rows="3">{{ old('deskripsi', $paket->deskripsi) }}</textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Berat (kg)</label>
                    <input type="number" name="berat_kg"
                           class="form-control" step="0.01" min="0.1"
                           value="{{ old('berat_kg', $paket->berat_kg) }}"
                           required>
                </div>

                <div class="mb-4">
                    <label class="form-label">Harga Paket (Rp)</label>
                    <input type="number" name="harga_paket"
                           class="form-control" min="0" step="0.01"
                           value="{{ old('harga_paket', $paket->harga_paket) }}"
                           required>
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary">
                        Simpan Perubahan
                    </button>

                    <a href="{{ route('paket-laundry.index') }}"
                       class="btn btn-secondary">
                        Kembali
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
