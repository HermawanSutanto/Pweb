<?php

namespace App\Http\Controllers;

use App\Models\gudang;
use Illuminate\Http\Request;

class DashboardGudangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.gudangs.index', [
            'gudangs' => gudang::all()

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.gudangs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'namaBarang' => 'required|max:255',
            'stok' => 'required',

        ]);

        gudang::create($validatedData);
        return redirect('/dashboard/gudangs')->with('success', 'Barang baru telah didaftarkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(gudang $gudang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(gudang $gudang)
    {
        return view('dashboard.gudangs.edit', [
            'gudang' => $gudang
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, gudang $gudang)
    {
        $validatedData = $request->validate([
            'namaBarang' => 'required|max:255',
            'stok' => 'required',
        ]);
        gudang::where('id', $gudang->id)->update($validatedData);
        return redirect('/dashboard/gudangs')->with('success', 'Barang telah diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(gudang $gudang)
    {
        gudang::destroy($gudang->id);
        return redirect('/dashboard/gudangs')->with('success', 'Barang telah dihapus!');
    }
}
