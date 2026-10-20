<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    // Menampilkan data layanan
    public function index()
    {
        $dataLayanan = Layanan::all();

        return view('layanan.index', compact('dataLayanan'));
    }

    // Menampilkan form tambah
    public function create()
    {
        return view('layanan.create');
    }

    // Menyimpan data layanan
    public function store(Request $request)
    {
        $request->validate([
            'nama_layanan' => 'required|string|max:100',
            'harga' => 'required|numeric|min:0',
        ]);

        Layanan::create([
            'nama_layanan' => $request->nama_layanan,
            'harga' => $request->harga,
        ]);

        return redirect()
            ->route('layanan.index')
            ->with('success', 'Data layanan berhasil ditambahkan!');
    }

    // Menampilkan form edit
    public function edit(string $id)
    {
        $dataLayanan = Layanan::findOrFail($id);

        return view('layanan.edit', compact('dataLayanan'));
    }

    // Memperbarui data layanan
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_layanan' => 'required|string|max:100',
            'harga' => 'required|numeric|min:0',
        ]);

        $dataLayanan = Layanan::findOrFail($id);

        $dataLayanan->update([
            'nama_layanan' => $request->nama_layanan,
            'harga' => $request->harga,
        ]);

        return redirect()
            ->route('layanan.index')
            ->with('success', 'Data layanan berhasil diperbarui!');
    }

    // Menghapus data layanan
    public function destroy(string $id)
    {
        $dataLayanan = Layanan::findOrFail($id);

        $dataLayanan->delete();

        return redirect()
            ->route('layanan.index')
            ->with('success', 'Data layanan berhasil dihapus!');
    }
}

