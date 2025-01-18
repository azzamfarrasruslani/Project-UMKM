<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menu = Menu::all();
        return view('menu.index', compact('menu'));

    }

    public function indexHome() {
        $menu = Menu::all();
        return view('homePage.menu.index', compact('menu'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('menu.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $request -> validate([
        'nama_menu' => 'required|string|max:255',
        'deskripsi_menu' => 'required|string|max:255',
        'kategori_menu' => 'required|string|max:255',
        'harga_menu' => 'required|string|max:255',
        'gambar_menu' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
       ]);

       $menu = new Menu();
       $menu -> nama_menu = $request -> nama_menu;
       $menu -> deskripsi_menu = $request -> deskripsi_menu;
       $menu -> kategori_menu = $request -> kategori_menu;
       $menu -> harga_menu = $request -> harga_menu;

       if ($request -> hasFile('gambar_menu')) {
        $menu -> gambar_menu = $request -> file ('gambar_menu') -> store ('images', 'public');

       }

       $menu -> save();

       return redirect() -> route('menu.index') -> with('success', 'Menu berhasil ditambahkan!');

    }

    /**
     * Display the specified resource.
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $menu)
    {
        return view ('menu.edit', compact('menu'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Menu $menu)
    {
        $request -> validate( [
        'nama_menu' => 'required|string|max:255',
        'deskripsi_menu' => 'required|string|max:255',
        'kategori_menu' => 'required|string|max:255',
        'status_menu' => 'required|in:aktif,non-aktif',
        'harga_menu' => 'required|numeric',
        'gambar_menu' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

       $menu -> nama_menu = $request -> nama_menu;
       $menu -> deskripsi_menu = $request -> deskripsi_menu;
       $menu -> kategori_menu = $request -> kategori_menu;
       $menu->status_menu = $request->status_menu;
       $menu -> harga_menu = $request -> harga_menu;

       if ($request -> hasFile('gambar_menu')) {
            if ($menu -> gambar) {
                Storage::delete('public/' . $menu->gambar );
            }
        $menu -> gambar_menu = $request -> file ('gambar_menu') -> store ('images', 'public');

       }

       $menu -> save();

       return redirect() -> route('menu.index') -> with('success', 'Menu berhasil ditambahkan!');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {
        if ($menu -> gambar_menu) {
            Storage::delete($menu->gambar_menu);
        }

        $menu -> delete();
        return redirect() -> route('menu.index') -> with('success', 'Menu berhasil dihapus!');
    }
}
