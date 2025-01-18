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
        'gaji' => 'nullable|string',
        'benefit' => 'nullable|string',
        'status' => 'required|boolean',
        'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $data = $request->all();

    // Upload gambar jika ada
    if ($request->hasFile('gambar')) {
        $file = $request->file('gambar');
        $filePath = $file->store('uploads', 'public'); // Simpan di folder `storage/app/public/uploads`
        $data['gambar'] = $filePath; // Simpan path gambar ke database
    }

    Karir::create($data);

    return redirect()->route('karir.index')->with('success', 'Lowongan berhasil ditambahkan!');
}


    public function show(Karir $job)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Karir $job)
    {
        return view ('karir.edit', compact('karir'));
    }


    public function update(Request $request, Karir $job)
    {
        $request->validate([
            'nama_posisi' => 'required|string|max:255',
            'lokasi' => 'required|string|max:255',
            'tipe_kerja' => 'required|string|max:255',
            'kualifikasi' => 'nullable|string',
            'deskripsi_tugas' => 'nullable|string',
            'gaji' => 'nullable|string',
            'benefit' => 'nullable|string',
            'status' => 'required|boolean',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

    $data = $request->all();

    // Upload gambar baru jika ada
    if ($request->hasFile('gambar')) {
        $file = $request->file('gambar');
        $filePath = $file->store('uploads', 'public'); // Simpan gambar baru

        // Hapus gambar lama jika ada
        if ($job->gambar && Storage::exists('public/' . $job->gambar)) {
            Storage::delete('public/' . $job->gambar);
        }

        $data['gambar'] = $filePath; // Simpan path gambar baru ke database
    }

    $job->update($data);

    return redirect()->route('karir.index')->with('success', 'Lowongan berhasil diperbarui!');
}



    public function destroy(Karir $job)
    {
        $job->delete();
        return redirect()->route('karir.index')->with('success', 'Lowongan berhasil dihapus!');
    }
}
