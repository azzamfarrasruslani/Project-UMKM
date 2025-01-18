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

    public function indexHome() {
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
            'deskripsi_promo' => 'required',
            'diskon_promo' => 'nullable|numeric|min:0|max:100',
            'tanggal_mulai' => 'required|date',
            'tanggal_akhir' => 'required|date|after_or_equal:tanggal_mulai',
            'gambar_promo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $promo = new Promo();
        $promo->judul = $request->judul;
        $promo->deskripsi_promo = $request->deskripsi_promo;
        $promo->diskon_promo = $request->diskon_promo;
        $promo->tanggal_mulai = $request->tanggal_mulai;
        $promo->tanggal_akhir = $request->tanggal_akhir;
        if ($request->hasFile('gambar_promo')) {
            $promo->gambar_promo = $request->file('gambar_promo')->store('images', 'public');
        }

        $promo->save();

        return redirect()->route('promo.index')->with('success', 'Promo berhasil dibuat!');
    }

    // public function edit($id)
    // {
    //     $item = Promo::where('id_promo', $id)->first(); // Mencari berdasarkan kolom 'id_telur'

    //     if (!$item) {
    //         return response()->json(['error' => 'Data tidak ditemukan'], 404); // Jika data tidak ditemukan
    //     }

    //     return response()->json(['item' => $item], 200); // Mengembalikan data dalam bentuk JSON
    // }

     /**
     * Show the form for creating a new resource.
     */
    public function edit(Promo $promo)
    {
        return view('promo.edit', compact('promo'));
    }




    public function update(Request $request, $id)
    {
        // Validasi input dari form
        $request->validate([
            'id_promo' => 'required|exists:promo,id_promo',
            'judul' => 'required|string|max:255',
            'diskon_promo' => 'nullable|numeric|min:0|max:100',
            'tanggal_mulai' => 'required|date',
            'tanggal_akhir' => 'required|date|after_or_equal:tanggal_mulai',
            'deskripsi_promo' => 'required|string',
            'gambar_promo' => 'nullable|image|max:2048',
        ]);

        // Temukan data promo berdasarkan ID
        $promo = Promo::find($id);

        // Pastikan data ditemukan
        if (!$promo) {
            return redirect()->route('promo.index')->with('error', 'Data promo tidak ditemukan');
        }

        // Update data


        $promo->judul = $request->judul;
        $promo->deskripsi_promo = $request->deskripsi_promo;
        $promo->diskon_promo = $request->diskon_promo;
        $promo->tanggal_mulai = $request->tanggal_mulai;
        $promo->tanggal_akhir = $request->tanggal_akhir;

        // Perbarui gambar jika ada file baru
        if ($request->hasFile('gambar_promo')) {
            // Hapus gambar lama jika ada
            if ($promo->gambar && Storage::disk('public')->exists($promo->gambar)) {
                Storage::disk('public')->delete($promo->gambar);
            }

            // Simpan gambar baru
            $path = $request->file('gambar_promo')->store('promo_images', 'public');
            $promo->gambar = $path;
        }

        // Simpan perubahan
        if ($promo->save()) {
            return redirect()->route('promo.index')->with('success', 'Data promo berhasil diperbarui');
        } else {
            return redirect()->route('promo.index')->with('error', 'Gagal memperbarui data promo');
        }
    }

     /**
     * Remove the specified resource from storage.
     */
    public function destroy(Promo $promo)
    {
        if ($promo -> gambar_promo) {
            Storage::delete($promo->gambar_promo);
        }

        $promo -> delete();
        return redirect() -> route('promo.index') -> with('success', 'Promo berhasil dihapus!');
    }



    // public function update(Request $request, $id)
    // {
    //     $promo = Promo::findOrFail($id);

    //     $request->validate([
    //         'judul' => 'required|string|max:255',
    //         'diskon' => 'nullable|numeric|min:0|max:100',
    //         'tanggal_mulai' => 'required|date',
    //         'tanggal_akhir' => 'required|date|after_or_equal:tanggal_mulai',
    //         'deskripsi' => 'required|string',
    //         'gambar' => 'nullable|image|max:2048',
    //     ]);

    //     $promo->judul = $request->judul;
    //     $promo->diskon = $request->diskon;
    //     $promo->tanggal_mulai = $request->tanggal_mulai;
    //     $promo->tanggal_akhir = $request->tanggal_akhir;
    //     $promo->deskripsi = $request->deskripsi;

    //     if ($request->hasFile('gambar')) {
    //         $path = $request->file('gambar')->store('promo_images', 'public');
    //         $promo->gambar = $path;
    //     }

    //     $promo->save();

    //     return response()->json(['success' => true, 'message' => 'Promo berhasil diperbarui!']);
    // }
}
