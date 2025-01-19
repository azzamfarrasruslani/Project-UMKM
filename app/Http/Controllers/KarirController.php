<?php

namespace App\Http\Controllers;

use App\Models\Karir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;




class KarirController extends Controller
{
    public function index()
    {
        $karir = Karir::all();
        return view('karir.index', compact('karir'));
    }

    public function indexHome()
    {
        $karir = Karir::all();
        return view('homePage.karir.index', compact('karir'));
    }

    public function create()
    {
        return view('karir.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_posisi' => 'required|string|max:255',
            'lokasi' => 'required|string|max:255',
            'tipe_kerja' => 'required|string|max:255',
            'kualifikasi' => 'nullable|string',
            'deskripsi_tugas' => 'nullable|string',
            'gaji' => 'nullable|numeric|min:0',
            'benefit' => 'nullable|string',
            'status' => 'required|in:aktif,non-aktif',
        ]);



        $karir = new Karir();
        $karir->nama_posisi = $request->nama_posisi;
        $karir->lokasi = $request->lokasi;
        $karir->tipe_kerja = $request->tipe_kerja;
        $karir->kualifikasi = $request->kualifikasi;
        $karir->deskripsi_tugas = $request->deskripsi_tugas;
        $karir->gaji = $request->gaji;
        $karir->benefit = $request->benefit;
        $karir->status = $request->status;


        $karir->save();

        return redirect()->route('karir.index')->with('success', 'Lowongan berhasil ditambahkan!');
    }


    public function show(Karir $job)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Karir $karir)
    {
        return view('karir.edit', compact('karir'));
    }


    public function update(Request $request, Karir $karir)
    {
        $request->validate([
            'nama_posisi' => 'required|string|max:255',
            'lokasi' => 'required|string|max:255',
            'tipe_kerja' => 'required|string|max:255',
            'kualifikasi' => 'nullable|string',
            'deskripsi_tugas' => 'nullable|string',
            'gaji' => 'nullable|numeric|min:0',
            'benefit' => 'nullable|string',
            'status' => 'required|in:aktif,non-aktif',
        ]);


        $karir->nama_posisi = $request->nama_posisi;
        $karir->lokasi = $request->lokasi;
        $karir->tipe_kerja = $request->tipe_kerja;
        $karir->kualifikasi = $request->kualifikasi;
        $karir->deskripsi_tugas = $request->deskripsi_tugas;
        $karir->gaji = $request->gaji;
        $karir->benefit = $request->benefit;
        $karir->status = $request->status;

        $karir->save();

        return redirect()->route('karir.index')->with('success', 'Lowongan berhasil diperbarui!');
    }



    public function destroy(Karir $karir)
    {
        $karir->delete();
        return redirect()->route('karir.index')->with('success', 'Lowongan berhasil dihapus!');
    }
}
