@extends('layouts.admin.app')

@section('content')
<div class="container py-4">
    <h2>Tambah Paket Laundry</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('paket-laundry.store') }}" method="POST">
        @csrf

        <label class="form-label">Nama Paket</label>
        <input type="text" name="nama_paket"
            class="form-control mb-3"
            value="{{ old('nama_paket') }}" required>

        <label class="form-label">Layanan</label>
        <select name="layanan_id" class="form-select mb-3" required>
            <option value="">Pilih Layanan</option>
            @foreach ($layanan as $item)
                <option value="{{ $item->layanan_id }}"
                    @selected(old('layanan_id') == $item->layanan_id)>
                    {{ $item->nama_layanan }}
                </option>
            @endforeach
        </select>

        <label class="form-label">Deskripsi</label>
        <textarea name="deskripsi"
            class="form-control mb-3">{{ old('deskripsi') }}</textarea>

        <label class="form-label">Berat (kg)</label>
        <input type="number" name="berat_kg"
            step="0.01" min="0.1"
            class="form-control mb-3"
            value="{{ old('berat_kg') }}" required>

        <label class="form-label">Harga Paket (Rp)</label>
        <input type="number" name="harga_paket"
            min="0" step="0.01"
            class="form-control mb-3"
            value="{{ old('harga_paket') }}" required>

        <button class="btn btn-primary">Simpan</button>
        <a href="{{ route('paket-laundry.index') }}"
            class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
