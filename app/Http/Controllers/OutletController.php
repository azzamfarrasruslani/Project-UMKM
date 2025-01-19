<?php

namespace App\Http\Controllers;

use App\Models\Outlet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class OutletController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $outlet = Outlet::all();
        return view('outlet.index', compact('outlet'));
    }

    public function indexHome()
    {
        $outlet = Outlet::all();
        return view('homePage.outlet.index', compact('outlet'));
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_outlet' => 'required|string|max:255',
            'alamat_outlet' => 'required|string|max:255',
            'jumlah_karyawan' => 'required|numeric',
            'no_hp' => 'required|string|max:15|unique:outlet,no_hp',
            'tanggal_berdiri' => 'required|date',
            'status_outlet' => 'required|in:aktif,non-aktif',
            'iframe_map' => 'nullable',
            'link_pesan_online' => 'required',
            'gambar_pesan_online' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);




        $outlet = new Outlet();
        $outlet->nama_outlet = $request->nama_outlet;
        $outlet->alamat_outlet = $request->alamat_outlet;
        $outlet->jumlah_karyawan = $request->jumlah_karyawan;
        $outlet->no_hp = $request->no_hp;
        $outlet->tanggal_berdiri = $request->tanggal_berdiri;
        $outlet->status_outlet = $request->status_outlet;
        $outlet->iframe_map = $request->iframe_map;
        $outlet->link_pesan_online = $request->link_pesan_online;

        if ($request->hasFile('gambar_pesan_online')) {
            $outlet->gambar_pesan_online = $request->file('gambar_pesan_online')->store('images', 'public');
        }

        $outlet->save();

        return redirect()->route('outlet.index')->with('success', 'Outlet berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Outlet $outlet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Outlet $outlet, )
    {
        return view('outlet.edit', compact('outlet'));
    }


    public function detail(Outlet $outlet, int $id_outlet)
    {
        $outlet = Outlet::findOrFail($id_outlet);
        return view('outlet.detail', compact('outlet'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Outlet $outlet)
    {


        // Validasi
        $request->validate([
            'nama_outlet' => 'required|string|max:255',
            'alamat_outlet' => 'required|string|max:255',
            'jumlah_karyawan' => 'required|numeric',
            'no_hp' => 'required|string|max:15|unique:outlet,no_hp',
            'tanggal_berdiri' => 'required|date',
            'status_outlet' => 'required|in:aktif,non-aktif',
            'iframe_map' => 'nullable',
            'link_pesan_online' => 'required',
            'gambar_pesan_online' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Mengupdate data berita
        $outlet->nama_outlet = $request->nama_outlet;
        $outlet->alamat_outlet = $request->alamat_outlet;
        $outlet->jumlah_karyawan = $request->jumlah_karyawan;
        $outlet->no_hp = $request->no_hp;
        $outlet->tanggal_berdiri = $request->tanggal_berdiri;
        $outlet->status_outlet = $request->status_outlet;
        $outlet->iframe_map = $request->iframe_map;
        $outlet->link_pesan_online = $request->link_pesan_online;


        if ($request->hasFile('gambar_pesan_online')) {
            if ( $outlet -> gambar_pesan_online) {
                Storage::delete('public/' .  $outlet->gambar_pesan_online);
            }
            $outlet->gambar_pesan_online = $request->file('gambar_pesan_online')->store('images', 'public');
        }

        $outlet->save();

        return redirect()->route('outlet.index')->with('success', 'Outlet berhasil diperbaharui');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Outlet $outlet)
    {
        $outlet->delete();
        return redirect()->route('outlet.index')->with('Success', 'Menu berhasil dihapus!');
    }
}
