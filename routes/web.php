<?php

use Illuminate\Support\Facades\Route;
use App\Models\Pelanggan;
use App\Models\Admin;
use App\Models\Layanan;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\LayananController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/admin', function () {
    $totalAdmin = Admin::count();
    $totalPelanggan = Pelanggan::count();
    $totalLayanan = Layanan::count();

    $dataPelanggan = Pelanggan::latest()
        ->take(5)
        ->get();

    return view('admin.dashboard', compact(
        'totalAdmin',
        'totalPelanggan',
        'totalLayanan',
        'dataPelanggan'
    ));
})->name('admin.dashboard');




/* Data Admin */
Route::resource('admin-data', AdminController::class)
    ->names('admin');

/* Data Pelanggan */
Route::resource('pelanggan', PelangganController::class);

/* Data Petugas */
Route::resource('petugas', PetugasController::class);

Route::resource('layanan', LayananController::class);
