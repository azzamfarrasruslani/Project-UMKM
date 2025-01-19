<?php

namespace App\Http\Controllers;

use App\Models\Promo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PromoController extends Controller
{
    public function index()
    {
        $promo = Promo::all();
        return view('promo.index', compact('promo'));
    }

    public function indexHome()
    {
        $promo = Promo::all();
        return view('homePage.promo.index', compact('promo'));
    }

    public function create()
    {
        return view('promo.create');
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi_promo' => 'required|string',
            'syarat_ketentuan' => 'required|string',
            'tanggal_mulai' => 'required|date',
            'tanggal_akhir' => 'required|date|after_or_equal:tanggal_mulai',
            'gambar_promo' => 'nullable|image|mimes:jpeg,png,jpg|max:20000',
        ]);

        $promo = new Promo();
        $promo->judul = $request->judul;
        $promo->deskripsi_promo = $request->deskripsi_promo;
        $promo->syarat_ketentuan = $request->syarat_ketentuan;
        $promo->tanggal_mulai = $request->tanggal_mulai;
        $promo->tanggal_akhir = $request->tanggal_akhir;

        if ($request->hasFile('gambar_promo')) {
            $promo->gambar_promo = $request->file('gambar_promo')->store('images', 'public');
        }

        $promo->save();

        return redirect()->route('promo.index')->with('success', 'Promo berhasil dibuat!');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function edit(Promo $promo)
    {
        return view('promo.edit', compact('promo'));
    }




    public function update(Request $request, Promo $promo)
    {

        $request->validate([
            'judul' => 'required|string|max:255',
            'tanggal_mulai' => 'required|date',
            'tanggal_akhir' => 'required|date|after_or_equal:tanggal_mulai',
            'deskripsi_promo' => 'required|string',
            'syarat_ketentuan' => 'required|string',
            'status_promo' => 'required|in:aktif,non-aktif',
            'gambar_promo' => 'nullable|image|mimes:jpeg,png,jpg|max:20000',
        ]);


        // Update data
        $promo->judul = $request->judul;
        $promo->deskripsi_promo = $request->deskripsi_promo;
        $promo->syarat_ketentuan = $request->syarat_ketentuan;
        $promo->tanggal_mulai = $request->tanggal_mulai;
        $promo->status_promo = $request->status_promo;
        $promo->tanggal_akhir = $request->tanggal_akhir;

        // Perbarui gambar jika ada file baru
        if ($request->hasFile('gambar_menu')) {
            if ($promo->gambar_promo) {
                Storage::delete('public/' . $promo->gambar_promo);
            }
            $promo->gambar_promo = $request->file('gambar_menu')->store('images', 'public');

        }

        $promo -> save();
        // Simpan perubahan
        return redirect() -> route('promo.index') -> with('success', 'Promo berhasil diperbaharui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Promo $promo)
    {
        if ($promo->gambar_promo) {
            Storage::delete($promo->gambar_promo);
        }

        $promo->delete();
        return redirect()->route('promo.index')->with('success', 'Promo berhasil dihapus!');
    }


}
