<?php

namespace App\Http\Controllers;

use App\Models\DataPeminjaman;
use App\Http\Requests\StoreDataPeminjamanRequest;
use App\Http\Requests\UpdateDataPeminjamanRequest;

class DataPeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.dataPeminjaman.index', [
            'dataPeminjamans' => DataPeminjaman::all(),


        ]);
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
    public function store(StoreDataPeminjamanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(DataPeminjaman $dataPeminjaman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DataPeminjaman $dataPeminjaman)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDataPeminjamanRequest $request, DataPeminjaman $dataPeminjaman)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DataPeminjaman $dataPeminjaman)
    {
        //
    }
}
