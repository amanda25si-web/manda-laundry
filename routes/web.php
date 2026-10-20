<?php

use Illuminate\Support\Facades\Route;
use App\Models\Pelanggan;
use App\Models\Admin;
use App\Models\Layanan;
<<<<<<< HEAD
use App\Http\Controllers\AuthController;
=======

>>>>>>> 3639d9241f0a393adfb5967d4da5a22ac7c3c71b
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\UserController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
<<<<<<< HEAD
    return view('guest.home');
});

// Guest - Contact Us
Route::get('/contact', function () {
    return view('guest.contact');
})->name('guest.contact');

// Halaman Login
Route::get('/auth', [AuthController::class, 'index'])
    ->name('guest.auth');

// Proses Login
Route::post('/auth', [AuthController::class, 'login'])
    ->name('guest.auth.login');

=======
    return view('home');
});

>>>>>>> 3639d9241f0a393adfb5967d4da5a22ac7c3c71b
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

<<<<<<< HEAD
=======



>>>>>>> 3639d9241f0a393adfb5967d4da5a22ac7c3c71b
/* Data Admin */
Route::resource('admin-data', AdminController::class)
    ->names('admin');

/* Data Pelanggan */
Route::resource('pelanggan', PelangganController::class);

Route::resource('layanan', LayananController::class);

Route::resource('user', UserController::class);
