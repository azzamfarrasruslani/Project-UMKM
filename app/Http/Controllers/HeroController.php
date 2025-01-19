<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hero = Hero::all();
        return view('hero.index', compact('hero'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Hero $hero)
    {

        $request->validate([
            'nama_hero' => 'required|string|max:255',
            'gambar_hero' => 'nullable|image|mimes:jpeg,png,jpg',
            'status_hero' => 'required|in:aktif,non-aktif',
        ]);
        $hero = new Hero();
        $hero->nama_hero = $request->nama_hero;
        $hero->status_hero = $request->status_hero;

        if ($request->hasFile('gambar_hero')) {
            if ($hero->gambar_hero) {
                Storage::delete('public/' . $hero->gambar_hero);
            }
            $hero->gambar_hero = $request->file('gambar_hero')->store('images', 'public');

        }

        $hero->save();

        return redirect()->route('hero.index')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Hero $hero)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hero $hero)
    {
        return view('hero.edit', compact('hero'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hero $hero)
    {
        $request->validate([
            'nama_hero' => 'required|string|max:255',
            'gambar_hero' => 'nullable|image|mimes:jpeg,png,jpg',
            'status_hero' => 'required|in:aktif,non-aktif',
        ]);

        $hero->nama_hero = $request->nama_hero;
        $hero->status_hero = $request->status_hero;

        if ($request->hasFile('gambar_hero')) {
            // Hapus file lama jika ada
            if ($hero->gambar_hero && Storage::exists('public/' . $hero->gambar_hero)) {
                Storage::delete('public/' . $hero->gambar_hero);
            }

            // Simpan file baru
            $hero->gambar_hero = $request->file('gambar_hero')->store('images', 'public');
        }

        $hero->save();

        return redirect()->route('hero.index')->with('success', 'Data berhasil diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hero $hero)
    {
        if ($hero->gambar_hero && Storage::exists('public/' . $hero->gambar_hero)) {
            Storage::delete('public/' . $hero->gambar_hero);
        }
        $hero->delete();
        return redirect()->route('hero.index')->with('success', 'Data berhasil dihapus!');
    }
}
