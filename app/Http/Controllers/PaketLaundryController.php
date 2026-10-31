<?php

namespace App\Http\Controllers;

use App\Models\PaketLaundry;
use App\Models\Layanan;
use Illuminate\Http\Request;

class PaketLaundryController extends Controller
{
    // Menampilkan semua paket laundry
    public function index()
    {
        $paket = PaketLaundry::with('layanan')->get();

        return view('paket.index', compact('paket'));
    }

    // Menampilkan form tambah paket
    public function create()
    {
        $layanan = Layanan::all();

        return view('paket.create', compact('layanan'));
    }

    // Menyimpan paket baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'layanan_id' => 'required|exists:layanan,layanan_id',
            'nama_paket' => 'required|string|max:100',
            'deskripsi' => 'nullable|string',
            'berat_kg' => 'required|numeric|min:0.1',
            'harga_paket' => 'required|numeric|min:0',
        ]);

        PaketLaundry::create($validated);

        return redirect()->route('paket-laundry.index')
            ->with('success', 'Paket laundry berhasil ditambahkan.');
    }

    // Menampilkan detail paket
    public function show(string $id)
    {
        $paket = PaketLaundry::with('layanan')
            ->findOrFail($id);

        return view('paket.show', compact('paket'));
    }

    // Menampilkan form edit paket
    public function edit(string $id)
    {
        $paket = PaketLaundry::findOrFail($id);
        $layanan = Layanan::all();

        return view('paket.edit', compact('paket', 'layanan'));
    }

    // Memperbarui data paket
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'layanan_id' => 'required|exists:layanan,layanan_id',
            'nama_paket' => 'required|string|max:100',
            'deskripsi' => 'nullable|string',
            'berat_kg' => 'required|numeric|min:0.1',
            'harga_paket' => 'required|numeric|min:0',
        ]);

        $paket = PaketLaundry::findOrFail($id);
        $paket->update($validated);

        return redirect()->route('paket-laundry.index')
            ->with('success', 'Paket laundry berhasil diperbarui.');
    }

    // Menghapus paket
    public function destroy(string $id)
    {
        $paket = PaketLaundry::findOrFail($id);
        $paket->delete();

        return redirect()->route('paket-laundry.index')
            ->with('success', 'Paket laundry berhasil dihapus.');
    }
}
