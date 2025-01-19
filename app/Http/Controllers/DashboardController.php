<?php

namespace App\Http\Controllers;
use App\Models\Menu;
use App\Models\Promo;
use App\Models\Testimoni;
use App\Models\Outlet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function index()
    {
        $outlet = Outlet::all();
        $menu = Menu::all();
        $promo = Promo::all();
        $testimoni = Testimoni::all();

        $totalOutlets = $outlet->count();
        $totalMenus = $menu->count();
        $totalEmployees = $outlet->sum('jumlah_karyawan');
        $averageRating = $testimoni->avg('rating');

        return view('dashboard', compact('menu', 'promo', 'testimoni', 'outlet', 'totalOutlets', 'totalMenus', 'totalEmployees', 'averageRating'));
    }
}
