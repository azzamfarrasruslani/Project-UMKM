<?php

namespace App\Http\Controllers;

use App\Models\Promo;
use Illuminate\Http\Request;

class PromoController extends Controller
{
    public function index()
    {
        $promo = Promo::all();
        return view('promo.index', compact('promo'));
    }

    public function create()
    {
        return view('promo.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required',
            'diskon' => 'nullable|numeric|min:0|max:100',
            'tanggal_mulai' => 'required|date',
            'tanggal_akhir' => 'required|date|after_or_equal:tanggal_mulai',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $promo = new Promo();
        $promo->judul = $request->judul;
        $promo->deskripsi = $request->deskripsi;
        $promo->diskon = $request->diskon;
        $promo->tanggal_mulai = $request->tanggal_mulai;
        $promo->tanggal_akhir = $request->tanggal_akhir;
        if ($request->hasFile('gambar')) {
            $promo->gambar = $request->file('gambar')->store('images', 'public');
        }

        $promo->save();

        return redirect()->route('promo.index')->with('success', 'Promo berhasil dibuat!');
    }

    public function edit(Promo $promo)
    {
        return view('promo.edit', compact('promo'));
    }

    public function update(Request $request, Promo $promo)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required',
            'diskon' => 'nullable|numeric|min:0|max:100',
            'tanggal_mulai' => 'required|date',
            'tanggal_akhir' => 'required|date|after_or_equal:tanggal_mulai',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'status' => 'required|boolean',
        ]);

        if ($request->hasFile('gambar')) {
            $validated['gambar'] = $request->file('gambar')->store('promo', 'public');
        }

        $promo->update($validated);

        return redirect()->route('promo.index')->with('success', 'Promo berhasil diperbarui!');
    }

    public function destroy(Promo $promo)
    {
        $promo->delete();
        return redirect()->route('promo.index')->with('success', 'Promo berhasil dihapus!');
    }
}
