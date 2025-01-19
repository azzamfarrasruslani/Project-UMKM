<?php

namespace App\Http\Controllers;
use App\Models\Hero;
use App\Models\Menu;
use App\Models\Promo;
use App\Models\Testimoni;
use App\Models\Kontak;
use App\Models\Outlet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index()
    {
        $outlet = Outlet::all();
        $hero = Hero::all();
        $menu = Menu::all();
        $promo = Promo::all();
        $kontak = Kontak::all();
        $testimoni = Testimoni::all();
        $totalOutlets = $outlet->count();
        $totalEmployees = $outlet->sum('jumlah_karyawan');
        $oldestOutletYear = $this->getOldestOutletYear();

        return view('home', compact('hero', 'menu', 'promo', 'testimoni', 'kontak', 'totalOutlets', 'totalEmployees', 'oldestOutletYear'));
    }

    private function getOldestOutletYear()
    {
        // Ambil outlet tertua berdasarkan tanggal_berdiri
        $oldestOutlet = Outlet::orderBy('tanggal_berdiri', 'asc')->first();

        // Pastikan tanggal_berdiri adalah objek Carbon dan ambil tahun
        if ($oldestOutlet && $oldestOutlet->tanggal_berdiri) {
            return $oldestOutlet->tanggal_berdiri->year; // Ambil tahun dari objek Carbon
        }

        return null; // Jika tidak ada outlet atau tanggal_berdiri tidak ada
    }


}
