<?php

namespace App\Http\Controllers;

use App\Models\TentangKami;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TentangKamiController extends Controller
{
    public function index()
    {
        $tentangKami = TentangKami::all();
        return view('tentangkami.index', compact('tentangKami'));
    }


    public function indexHome()
    {
        $tentangKami = TentangKami::all();
        return view('homePage.tentangKami.index', compact('tentangKami'));
    }

    public function create()
    {
        return view('tentangKami.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul_tK' => 'required|string|max:255',
            'sejarah_singkat' => 'required',
            'visi' => 'nullable|string',
            'misi' => 'nullable|string',
            'gambar_tK1' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'gambar_tK2' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);


        $tentangKami = new TentangKami();
        $tentangKami->judul_tK = $request->judul_tK;
        $tentangKami->sejarah_singkat = $request->sejarah_singkat;
        $tentangKami->visi = $request->visi;
        $tentangKami->misi = $request->misi;

        if ($request->hasFile('gambar_tK1')) {
            $tentangKami->gambar_tK1 = $request->file('gambar_tK1')->store('images', 'public');

        }
        if ($request->hasFile('gambar_tK2')) {
            $tentangKami->gambar_tK2 = $request->file('gambar_tK2')->store('images', 'public');

        }

        $tentangKami->save();


        return redirect()->route('tentangKami.index')->with('success', 'Data Tentang Kami berhasil ditambahkan.');
    }

    public function show(TentangKami $tentangKami)
    {
        return view('tentangKami.show', compact('tentangKami'));
    }

    public function edit(TentangKami $tentangKami)
    {
        return view('tentangKami.edit', compact('tentangKami'));
    }

    public function update(Request $request, TentangKami $tentangKami)
    {
        $validated = $request->validate([
            'judul_tK' => 'required|string|max:255',
            'sejarah_singkat' => 'required',
            'visi' => 'nullable|string',
            'misi' => 'nullable|string',
            'gambar_tK1' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'gambar_tK2' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('gambar_tK')) {
            $validated['gambar_tK1'] = $request->file('gambar_tK1')->store('uploads', 'public');
        }
        if ($request->hasFile('gambar_tK2')) {
            $validated['gambar_tK2'] = $request->file('gambar_tK2')->store('uploads', 'public');
        }

        $tentangKami->update($validated);

        return redirect()->route('tentangKami.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy(TentangKami $tentangKami)
    {

        if ($tentangKami -> gambar_tK1) {
            Storage::delete($tentangKami->gambar_tK2);
        }
        if ($tentangKami -> gambar_tK2) {
            Storage::delete($tentangKami->gambar_tK2);
        }

        $tentangKami->delete();
        return redirect()->route('tentangKami.index')->with('success', 'Data berhasil dihapus.');
    }
}
