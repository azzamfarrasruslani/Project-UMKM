<?php

namespace App\Http\Controllers;
use App\Models\Hero;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index()
    {
        $hero = Hero::all();
        $menu = Menu::all();
        return view('home', compact('hero', 'menu'));
    }


    // public function indexMenu()
    // {
    //     $menu = Menu::all();
    //     return view('homePage.menu.index', compact('menu'));
    // }
}
