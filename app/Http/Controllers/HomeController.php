<?php

namespace App\Http\Controllers;
use App\Models\Hero;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index()
    {
        $hero = Hero::all();
        return view('home', compact('hero'));
    }
}
