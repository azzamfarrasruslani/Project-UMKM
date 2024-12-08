<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PromoController;
use App\Models\User; // Pastikan model User di-import
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\BlogController;

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});




Route::resource('promo', PromoController::class)
    ->only(['index','create', 'store', 'edit', 'destroy', 'update'])
    ->middleware(['auth', 'verified']);
Route::resource('menu', MenuController::class)->only(['index','create','store','edit','destroy','update'])
->middleware(['auth','verified']);
Route::resource('blog', BlogController::class)->only(['index','create','store','edit','destroy','update'])
->middleware(['auth','verified']);

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
