<?php

namespace App\Http\Controllers;

use App\Models\TentangKami;
use Illuminate\Http\Request;

class TentangKamiController extends Controller
{
    public function index()
    {
        $tentangKami = TentangKami::all();
        return view('tentangkami.index', compact('tentangKami'));
    }


    public function indexHome() {
        $tentangKami = TentangKami::all();
        return view('homePage.tentangKami.index', compact('tentangKami'));
    }

    public function create()
    {
        return view('tentangKami.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul_tK' => 'required|string|max:255',
            'sejarah_singkat' => 'required',
            'visi' => 'nullable|string',
            'misi' => 'nullable|string',
            'gambar_tK1' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'gambar_tK2' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'gambar_tK3' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('gambar_tK1')) {
            $validated['gambar_tK1'] = $request->file('gambar_tK1')->store('uploads', 'public');
        }
        if ($request->hasFile('gambar_tK2')) {
            $validated['gambar_tK2'] = $request->file('gambar_tK2')->store('uploads', 'public');
        }
        if ($request->hasFile('gambar_tK3')) {
            $validated['gambar_tK3'] = $request->file('gambar_tK3')->store('uploads', 'public');
        }

        TentangKami::create($validated);

        return redirect()->route('tentangKami.index')->with('success', 'Data berhasil ditambahkan.');
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
            'gambar_tK3' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('gambar_tK')) {
            $validated['gambar_tK1'] = $request->file('gambar_tK1')->store('uploads', 'public');
        }
        if ($request->hasFile('gambar_tK2')) {
            $validated['gambar_tK2'] = $request->file('gambar_tK2')->store('uploads', 'public');
        }
        if ($request->hasFile('gambar_tK3')) {
            $validated['gambar_tK3'] = $request->file('gambar_tK3')->store('uploads', 'public');
        }

        $tentangKami->update($validated);

        return redirect()->route('tentangKami.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy(TentangKami $tentangKami)
    {
        $tentangKami->delete();
        return redirect()->route('tentangKami.index')->with('success', 'Data berhasil dihapus.');
    }
}
