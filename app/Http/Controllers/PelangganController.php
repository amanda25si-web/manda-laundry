<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index()
    {
        $dataPelanggan = Pelanggan::all();

        return view('pelanggan.index', compact('dataPelanggan'));
    }

    public function create()
    {
        return view('pelanggan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
        ]);

        Pelanggan::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
        ]);

        return redirect()
            ->route('pelanggan.index')
            ->with('success', 'Data pelanggan berhasil ditambahkan!');
    }

    public function show(string $id)
    {
        $dataPelanggan = Pelanggan::findOrFail($id);

        return view('pelanggan.show', compact('dataPelanggan'));
    }

    public function edit(string $id)
    {
        $dataPelanggan = Pelanggan::findOrFail($id);

        return view('pelanggan.edit', compact('dataPelanggan'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
        ]);

        $dataPelanggan = Pelanggan::findOrFail($id);

        $dataPelanggan->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
        ]);

        return redirect()
            ->route('pelanggan.index')
            ->with('success', 'Data pelanggan berhasil diperbarui!');
    }

    public function destroy(string $id)
    {
        $dataPelanggan = Pelanggan::findOrFail($id);

        $dataPelanggan->delete();

        return redirect()
            ->route('pelanggan.index')
            ->with('success', 'Data pelanggan berhasil dihapus!');
    }
}
