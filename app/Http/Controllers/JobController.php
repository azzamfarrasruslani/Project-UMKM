<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;


class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::all();
        return view('job.index', compact('jobs'));
    }

    public function create()
    {
        return view('job.create');
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

    Job::create($data);

    return redirect()->route('job.index')->with('success', 'Lowongan berhasil ditambahkan!');
}


    public function show(Job $job)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
        return view ('job.edit', compact('job'));
    }


    public function update(Request $request, Job $job)
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
        if ($job->gambar && \Storage::exists('public/' . $job->gambar)) {
            \Storage::delete('public/' . $job->gambar);
        }

        $data['gambar'] = $filePath; // Simpan path gambar baru ke database
    }

    $job->update($data);

    return redirect()->route('job.index')->with('success', 'Lowongan berhasil diperbarui!');
}



    public function destroy(Job $job)
    {
        $job->delete();
        return redirect()->route('job.index')->with('success', 'Lowongan berhasil dihapus!');
    }
}
