<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\OutletController;
use App\Models\User; // Pastikan model User di-import
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\KarirController;

use App\Http\Controllers\BlogController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TentangKamiController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\PesanSaranController;

use App\Http\Controllers\JobController;
use App\Http\Controllers\ReviewController;


Route::get('/', [HomeController::class, 'index'])->name('home');

// Dahshboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// Promo
Route::resource('promo', PromoController::class)
    ->only(['index', 'create', 'store', 'edit', 'destroy', 'update'])
    ->middleware(['auth', 'verified']);

Route::controller(PromoController::class)->group(function () {
    Route::get('home/promo', 'indexHome')->name('promo.indexHome');
});



// Menu
Route::resource('menu', MenuController::class)->only(['index', 'create', 'store', 'edit', 'destroy', 'update'])
    ->middleware(['auth', 'verified']);


Route::controller(MenuController::class)->group(function () {
    Route::get('home/menu', 'indexHome')->name('menu.indexHome');
});


// Outlet
Route::resource('outlet', OutletController::class)->only(['index', 'create', 'store', 'edit', 'destroy', 'update', 'show'])
    ->middleware(['auth', 'verified']);

Route::get('/outlet/{id_outlet}/detail', [OutletController::class, 'detail'])
    ->name('outlet.detail')
    ->middleware(['auth', 'verified']);

Route::get('/outlet/{id_outlet}/updateStatus', [OutletController::class, 'updateStatus'])
    ->name('outlet.updateStatus')
    ->middleware(['auth', 'verified']);

Route::controller(OutletController::class)->group(function () {
    Route::get('home/outlet', 'indexHome')->name('outlet.indexHome');
});



// Blog
Route::resource('blog', BlogController::class)->only(['index', 'create', 'store', 'edit', 'destroy', 'update'])
    ->middleware(['auth', 'verified']);

// Hero
Route::resource('hero', HeroController::class)->only(['index', 'create', 'store', 'edit', 'destroy', 'update'])
    ->middleware(['auth', 'verified']);

// Pesan Saran
Route::resource('pesanSaran', PesanSaranController::class)->only(['index','destroy'])
    ->middleware(['auth', 'verified']);
// Route store tanpa middleware
Route::post('pesanSaran', [PesanSaranController::class, 'store'])->name('pesanSaran.store');


// Tentang Kami
Route::resource('tentangKami', TentangKamiController::class)->only(['index', 'create', 'store', 'edit', 'destroy', 'update'])
    ->middleware(['auth', 'verified']);

Route::controller(TentangKamiController::class)->group(function () {
    Route::get('home/tentangKami', 'indexHome')->name('tentangKami.indexHome');
});

// Karir
Route::resource('karir', KarirController::class)->only(['index','create','store','edit','destroy','update'])
->middleware(['auth','verified']);

// Review
Route::resource('reviews', ReviewController::class)->only(['index','create','store','edit','destroy','update'])
->middleware(['auth','verified']);

// Kontak
Route::resource('kontak', KontakController::class)
    ->only(['index', 'create', 'store', 'edit', 'update', 'destroy'])
    ->middleware(['auth', 'verified']);










// Route untuk Google login
// Route::get('auth/google', function () {
//     return Socialite::driver('google')->redirect();
// });

// // Route callback setelah login menggunakan Google
// Route::get('auth/google/callback', function () {
//     // Ambil data user dari Google
//     $googleUser = Socialite::driver('google')->user();
//     // Cari pengguna di database berdasarkan email
//     $user = User::where('email', $googleUser->getEmail())->first();

//     if ($user) {
//         // Jika pengguna sudah terdaftar, login pengguna
//         Auth::login($user);
//     } else {
//         // Jika pengguna belum terdaftar, buat akun baru
//         $user = User::create([
//             'name' => $googleUser->getName(),
//             'email' => $googleUser->getEmail(),
//             'google_id' => $googleUser->getId(), // Pastikan kamu punya kolom ini di database
//         ]);

//         Auth::login($user);
//     }

//     // Setelah login, arahkan ke halaman dashboard
//     return redirect('/dashboard');
// });




require __DIR__ . '/auth.php';
