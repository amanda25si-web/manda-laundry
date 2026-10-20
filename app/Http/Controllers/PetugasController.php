<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
    public function index()
    {
        $dataPetugas = Petugas::all();

        return view('petugas.index', compact('dataPetugas'));
    }

    public function create()
    {
        return view('petugas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'username' => 'required',
            'no_hp' => 'required',
        ]);

        Petugas::create([
            'nama' => $request->nama,
            'username' => $request->username,
            'no_hp' => $request->no_hp,
        ]);

        return redirect()
            ->route('petugas.index')
            ->with('success', 'Data petugas berhasil ditambahkan!');
    }

    public function show(string $id)
    {
        $dataPetugas = Petugas::findOrFail($id);

        return view('petugas.show', compact('dataPetugas'));
    }

    public function edit(string $id)
    {
        $dataPetugas = Petugas::findOrFail($id);

        return view('petugas.edit', compact('dataPetugas'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required',
            'username' => 'required',
            'no_hp' => 'required',
        ]);

        $dataPetugas = Petugas::findOrFail($id);

        $dataPetugas->update([
            'nama' => $request->nama,
            'username' => $request->username,
            'no_hp' => $request->no_hp,
        ]);

        return redirect()
            ->route('petugas.index')
            ->with('success', 'Data petugas berhasil diperbarui!');
    }

    public function destroy(string $id)
    {
        $dataPetugas = Petugas::findOrFail($id);

        $dataPetugas->delete();

        return redirect()
            ->route('petugas.index')
            ->with('success', 'Data petugas berhasil dihapus!');
    }
}
