<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Admin;

class AdminController extends Controller
{
    public function index()
    {
        $dataAdmin = Admin::all();

        return view('admin.index', compact('dataAdmin'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
    $request->validate([
        'nama' => 'required|string|max:100',
        'username' => 'required|string|unique:admin,username',
        'email' => 'required|email',
        'no_hp' => 'required',
        'password' => 'required|string|min:8',
        'password' => Hash::make($request->password),
    ]);

    Admin::create([
        'nama' => $request->nama,
        'username' => $request->username,
        'email' => $request->email,
        'no_hp' => $request->no_hp,
        'password' => \Illuminate\Support\Facades\Hash::make($request->password),
    ]);

    return redirect()
        ->route('admin.index')
        ->with('success', 'Data admin berhasil ditambahkan!');
    }


    public function edit(string $id)
    {
        $dataAdmin = Admin::findOrFail($id);

        return view('admin.edit', compact('dataAdmin'));
    }


public function update(Request $request, string $id)
{
    $dataAdmin = Admin::findOrFail($id);

    $request->validate([
        'nama' => 'required',
        'username' => [
            'required',
            Rule::unique('admin', 'username')
                ->ignore($dataAdmin->getKey(), $dataAdmin->getKeyName()),
        ],
        'email' => 'required|email',
        'no_hp' => 'required',
    ]);

    $dataAdmin->update([
        'nama' => $request->nama,
        'username' => $request->username,
        'email' => $request->email,
        'no_hp' => $request->no_hp,
    ]);

    return redirect()
        ->route('admin.index')
        ->with('success', 'Data admin berhasil diperbarui!');
}


    public function destroy(string $id)
    {
        $dataAdmin = Admin::findOrFail($id);

        $dataAdmin->delete();

        return redirect()
            ->route('admin.index')
            ->with('success', 'Data admin berhasil dihapus!');
    }
}
