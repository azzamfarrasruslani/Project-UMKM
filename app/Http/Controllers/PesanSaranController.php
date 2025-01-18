<?php

namespace App\Http\Controllers;

use App\Models\PesanSaran;
use Illuminate\Http\Request;

class PesanSaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pesansarans = PesanSaran::all(); // Mengambil semua data dari tabel 'pesansaran'
        return view('dashboard', compact('pesansarans')); // Mengirim data ke view
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pesansaran.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:25',
            'email' => 'required|string|email|max:25',
            'subjek' => 'required|string|max:35',
            'pesan' => 'required|string',
        ]);

        PesanSaran::create($request->all());
        return redirect()->route('pesansaran.index')->with('success', 'Pesan Saran berhasil ditambahkan!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PesanSaran $pesansaran)
    {
        return view('pesansaran.edit', compact('pesansaran'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PesanSaran $pesansaran)
    {
        $request->validate([
            'nama' => 'required|string|max:25',
            'email' => 'required|string|email|max:25',
            'subjek' => 'required|string|max:35',
            'pesan' => 'required|string',
        ]);

        $pesansaran->update($request->all());
        return redirect()->route('pesansaran.index')->with('success', 'Pesan Saran berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PesanSaran $pesansaran)
    {
        $pesansaran->delete();
        return redirect()->route('pesansaran.index')->with('success', 'Pesan Saran berhasil dihapus!');
    }
}
