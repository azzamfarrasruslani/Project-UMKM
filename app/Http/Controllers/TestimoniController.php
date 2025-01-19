<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimoni = Testimoni::all();
        return view('testimoni.index', compact('testimoni'));
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
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'asal_testimoni' => 'required|string|max:255',
            'pesan' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        $testimoni = new Testimoni();
        $testimoni->nama = $request->nama;
        $testimoni->asal_testimoni = $request->asal_testimoni;
        $testimoni->pesan = $request->pesan;
        $testimoni->rating = $request->rating;

        $testimoni->save();

        return redirect()->route('testimoni.index')->with('success', 'Testimoni berhasil ditambahkan!');

    }

    /**
     * Display the specified resource.
     */
    public function show(Testimoni $testimoni)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimoni $testimoni)
    {
        return view('testimoni.edit', compact('testimoni'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Testimoni $testimoni)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'asal_testimoni' => 'required|string|max:255',
            'pesan' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
        ]);


        $testimoni->nama = $request->nama;
        $testimoni->asal_testimoni = $request->asal_testimoni;
        $testimoni->pesan = $request->pesan;
        $testimoni->rating = $request->rating;

        $testimoni -> save();

        return redirect() -> route('testimoni.index') -> with('success', 'Testimoni berhasil diperbaharui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimoni $testimoni)
    {
        $testimoni -> delete();
        return redirect() -> route('testimoni.index') -> with('success', 'Testimoni berhasil dihapus!');
    }
}
