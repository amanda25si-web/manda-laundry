
<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

use App\Models\Pelanggan;
use App\Models\Admin;
use App\Models\Layanan;
use App\Models\PaketLaundry;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PaketLaundryController;
use App\Http\Controllers\PromoController;

// Halaman utama
Route::get('/', function () {
    return view('welcome');
});

// Halaman Home
Route::get('/home', function () {
    $paketGuest = PaketLaundry::with('layanan')->get();

    $promoGuest = DB::table('promo')
        ->join(
            'paket_laundry',
            'promo.paket_id',
            '=',
            'paket_laundry.paket_id'
        )
        ->whereDate('promo.tanggal_mulai', '<=', now()->toDateString())
        ->whereDate('promo.tanggal_berakhir', '>=', now()->toDateString())
        ->select('promo.*', 'paket_laundry.nama_paket')
        ->get();

    return view('home', compact('paketGuest', 'promoGuest'));
});


// Contact Us
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Login Admin
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// Proses login Admin
Route::post('/login', function (Request $request) {
    $request->validate([
        'username' => 'required|string',
        'password' => 'required|string',
    ]);

    $admin = Admin::where('username', $request->username)->first();

    if (
        !$admin ||
        !Hash::check($request->password, $admin->password)
    ) {
        return back()
            ->withErrors([
                'username' => 'Username atau password salah.',
            ])
            ->withInput($request->only('username'));
    }

    session(['admin_id' => $admin->getKey()]);

    return redirect('/admin');
});

// Dashboard Admin
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

// CRUD Admin
Route::resource('admin-data', AdminController::class)
    ->names('admin');

// CRUD Pelanggan
Route::resource('pelanggan', PelangganController::class);

// CRUD Layanan
Route::resource('layanan', LayananController::class);

// CRUD User
Route::resource('user', UserController::class);

Route::resource('paket-laundry', PaketLaundryController::class)
    ->parameters(['paket-laundry' => 'id']);

Route::resource('promo', PromoController::class)
    ->parameters(['promo' => 'id']);
