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
        $pesanSaran = PesanSaran::all();
        return view('pesanSaran.index', compact('pesanSaran'));
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subjek' => 'required|string|max:255',
            'pesan' => 'required|string|max:1000',
        ]);


        $pesanSaran = new PesanSaran();
        $pesanSaran->nama = $request->nama;
        $pesanSaran->email = $request->email;
        $pesanSaran->subjek = $request->subjek;
        $pesanSaran->pesan = $request->pesan;

        $pesanSaran->save();

        return redirect()->route('home')->with('success', 'Menu berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(PesanSaran $pesanSaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PesanSaran $pesanSaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PesanSaran $pesanSaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PesanSaran $pesanSaran)
    {
        //
    }
}
