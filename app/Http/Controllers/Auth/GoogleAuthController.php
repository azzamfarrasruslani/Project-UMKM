<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User; // Pastikan model User di-import
use Illuminate\Support\Facades\Auth; // Auth facade untuk login
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite; // Socialite untuk Google login

class GoogleAuthController extends Controller
{
    // Fungsi untuk redirect ke halaman Google login
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    // Fungsi untuk handle callback dari Google
    public function handleGoogleCallback()
    {
        try {
            // Ambil data user dari Google
            $googleUser = Socialite::driver('google')->user();

            // Cari pengguna di database berdasarkan email
            $user = User::where('email', $googleUser->getEmail())->first();

            if ($user) {
                // Jika pengguna sudah terdaftar, login pengguna
                Auth::login($user);
                // Redirect ke dashboard setelah login
                return redirect('/dashboard');
            } else {
                // Jika pengguna tidak terdaftar, arahkan ke login dengan pesan error
                return redirect('/login')->with('error', 'Akun Google Anda tidak terdaftar');
            }
        } catch (\Exception $e) {
            // Tangani error jika terjadi
            return redirect('/login')->with('error', 'Terjadi kesalahan saat login menggunakan Google');
        }
    }


      // Fungsi untuk handle callback dari Google
    //   public function handleGoogleCallback()
    //   {
    //       try {
    //           // Ambil data user dari Google
    //           $googleUser = Socialite::driver('google')->user();
  
    //           // Cari pengguna di database berdasarkan email
    //           $user = User::where('email', $googleUser->getEmail())->first();
  
    //           if ($user) {
    //               // Jika pengguna sudah terdaftar, login pengguna
    //               Auth::login($user);
    //               // Redirect ke dashboard setelah login
    //               return redirect('/dashboard');
    //           } else {
    //               // Jika pengguna belum terdaftar, daftarkan mereka
    //               $newUser = User::create([
    //                   'name' => $googleUser->getName(),
    //                   'email' => $googleUser->getEmail(),
    //                   'password' => Hash::make('password_default_google'), // Berikan password default atau null
    //                   'google_id' => $googleUser->getId(), // Jika Anda ingin menyimpan Google ID
    //                   'avatar' => $googleUser->getAvatar(), // Avatar URL dari Google
    //               ]);
  
    //               // Login pengguna baru yang terdaftar
    //               Auth::login($newUser);
  
    //               // Redirect ke dashboard setelah registrasi dan login
    //               return redirect('/dashboard');
    //           }
    //       } catch (\Exception $e) {
    //           // Tangani error jika terjadi
    //           return redirect('/login')->with('error', 'Terjadi kesalahan saat login menggunakan Google');
    //       }
    //   }
  

}
