<?php

namespace App\Http\Controllers;
use App\Models\Hero;
use App\Models\Menu;
use App\Models\Promo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index()
    {
        $hero = Hero::all();
        $menu = Menu::all();
        $promo = Promo::all();
        return view('home', compact('hero', 'menu', 'promo'));
    }
}
