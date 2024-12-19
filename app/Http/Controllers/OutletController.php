<?php

namespace App\Http\Controllers;

use App\Models\Outlet;
use Illuminate\Http\Request;

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

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_outlet' => 'required|unique:outlet,kode_outlet',
            'nama_outlet' => 'required',
            'lokasi_outlet' => 'required',
            'no_hp' => 'required',
            'email_outlet' => 'nullable|email',
            'tanggal_berdiri' => 'required|date',
            'status' => 'required|in:aktif,non-aktif',
            'iframe_map' => 'nullable',
        ]);

        $outlet = new Outlet();
        $outlet->kode_outlet = $request->kode_outlet;
        $outlet->nama_outlet = $request->nama_outlet;
        $outlet->lokasi_outlet = $request->lokasi_outlet;
        $outlet->no_hp = $request->no_hp;
        $outlet->email_outlet = $request->email_outlet;
        $outlet->tanggal_berdiri = $request->tanggal_berdiri;
        $outlet->status = $request->status;
        $outlet->iframe_map = $request->iframe_map;

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
    public function update(Request $request, $id_outlet)
    {
        // Mengambil berita berdasarkan ID yang diberikan
        $outlet = Outlet::findOrFail($id_outlet);

        // Validasi
        $request->validate([
            'kode_outlet' => 'required',
            'nama_outlet' => 'required',
            'lokasi_outlet' => 'required',
            'no_hp' => 'required',
            'email_outlet' => 'nullable|email',
            'tanggal_berdiri' => 'required|date',
            'status' => 'required|in:aktif,non-aktif',
            'iframe_map' => 'nullable',
        ]);

        // Mengupdate data berita
        $outlet->kode_outlet = $request->kode_outlet;
        $outlet->nama_outlet = $request->nama_outlet;
        $outlet->lokasi_outlet = $request->lokasi_outlet;
        $outlet->no_hp = $request->no_hp;
        $outlet->email_outlet = $request->email_outlet;
        $outlet->tanggal_berdiri = $request->tanggal_berdiri;
        $outlet->status = $request->status;
        $outlet->iframe_map = $request->iframe_map;
        $outlet->save();
        return redirect()->route('outlet.index')->with('success', 'Outlet berhasil diperbaharui');
    }


    public function updateStatus(Request $request, $id_outlet)
    {
        // Mengambil berita berdasarkan ID yang diberikan
        $outlet = Outlet::findOrFail($id_outlet);

        // Validasi
        $request->validate([
            'status' => 'required|in:aktif,non-aktif',
        ]);

        // Mengupdate data berita
        $outlet->status = $request->status;
        $outlet->save();
        return redirect()->route('outlet.index')->with('success', 'Status berhasil diperbaharui');
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
