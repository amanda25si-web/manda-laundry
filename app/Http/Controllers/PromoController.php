<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PromoController extends Controller
{
    // Menampilkan semua data promo
    public function index()
    {
        $promo = DB::table('promo')
            ->join(
                'paket_laundry',
                'promo.paket_id',
                '=',
                'paket_laundry.paket_id'
            )
            ->select('promo.*', 'paket_laundry.nama_paket')
            ->orderBy('promo.promo_id', 'desc')
            ->get();

        return view('promo.index', compact('promo'));
    }

    // Menampilkan form tambah promo
    public function create()
    {
        $paket = DB::table('paket_laundry')
            ->orderBy('nama_paket')
            ->get();

        return view('promo.create', compact('paket'));
    }

    // Menyimpan promo baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'paket_id' => 'required|exists:paket_laundry,paket_id',
            'nama_promo' => 'required|string|max:100',
            'deskripsi' => 'nullable|string',
            'diskon_persen' => 'required|integer|min:1|max:100',
            'tanggal_mulai' => 'required|date',
            'tanggal_berakhir' => 'required|date|after_or_equal:tanggal_mulai',
        ]);

        DB::table('promo')->insert([
            'paket_id' => $validated['paket_id'],
            'nama_promo' => $validated['nama_promo'],
            'deskripsi' => $validated['deskripsi'] ?? null,
            'diskon_persen' => $validated['diskon_persen'],
            'tanggal_mulai' => $validated['tanggal_mulai'],
            'tanggal_berakhir' => $validated['tanggal_berakhir'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('promo.index')
            ->with('success', 'Promo berhasil ditambahkan.');
    }

    // Menampilkan detail promo
    public function show(string $id)
    {
        $promo = DB::table('promo')
            ->join(
                'paket_laundry',
                'promo.paket_id',
                '=',
                'paket_laundry.paket_id'
            )
            ->select('promo.*', 'paket_laundry.nama_paket')
            ->where('promo.promo_id', $id)
            ->first();

        if (!$promo) {
            abort(404);
        }

        return view('promo.show', compact('promo'));
    }

    // Menampilkan form edit promo
    public function edit(string $id)
    {
        $promo = DB::table('promo')
            ->where('promo_id', $id)
            ->first();

        if (!$promo) {
            abort(404);
        }

        $paket = DB::table('paket_laundry')
            ->orderBy('nama_paket')
            ->get();

        return view('promo.edit', compact('promo', 'paket'));
    }

    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'paket_id' => 'required|exists:paket_laundry,paket_id',
            'nama_promo' => 'required|string|max:100',
            'deskripsi' => 'nullable|string',
            'diskon_persen' => 'required|integer|min:1|max:100',
            'tanggal_mulai' => 'required|date',
            'tanggal_berakhir' => 'required|date|after_or_equal:tanggal_mulai',
        ]);

        $promoAda = DB::table('promo')
            ->where('promo_id', $id)
            ->exists();

        if (!$promoAda) {
            abort(404);
        }

        DB::table('promo')
            ->where('promo_id', $id)
            ->update([
                'paket_id' => $validated['paket_id'],
                'nama_promo' => $validated['nama_promo'],
                'deskripsi' => $validated['deskripsi'] ?? null,
                'diskon_persen' => $validated['diskon_persen'],
                'tanggal_mulai' => $validated['tanggal_mulai'],
                'tanggal_berakhir' => $validated['tanggal_berakhir'],
                'updated_at' => now(),
            ]);

        return redirect()->route('promo.index')
            ->with('success', 'Promo berhasil diperbarui.');
    }
    public function destroy(string $id)
    {
        $promoAda = DB::table('promo')
            ->where('promo_id', $id)
            ->exists();

        if (!$promoAda) {
            abort(404);
        }
        DB::table('promo')
            ->where('promo_id', $id)
            ->delete();

        return redirect()->route('promo.index')
            ->with('success', 'Promo berhasil dihapus.');
    }
}
