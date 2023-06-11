<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\gudang;
use App\Models\Organisasi;
use App\Models\Bag;
use App\Models\DataPeminjaman;
use Illuminate\Http\Request;

class DashboardBagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('dashboard.bags.index', [
            'bags' => Bag::where('user_id', auth()->user()->id)->get(),


        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.bags.create', [
            'gudangs' => gudang::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request['user_id'] = auth()->user()->id;
        $validatedData = $request->validate([
            'namaBarang' => 'required|max:255',
            'jumlah' => 'required',
            'user_id' => 'required'

        ]);




        $barang = $validatedData['namaBarang'];
        $jumlahStokGudang = gudang::where('namaBarang', $request->namaBarang)->first()->stok;

        // ndak tau bisa apa ndak
        $barang = $validatedData['namaBarang'];
        $jumlahbarang = (int)$validatedData['jumlah'];
        $tanggalpengembalian = $request['pengembalian'];
        $namaukm = auth()->user()->organisasi_id;
        $namaOrmawa = Organisasi::where('id', $namaukm)->first()->namaOrganisasi;
        $nama = User::where('id', $request->user_id)->first()->name;

        if ($jumlahbarang <= $jumlahStokGudang) {
            $isipeminjaman = array(
                'pengembalian' => $tanggalpengembalian,
                'namaBarang' => $barang,
                'jumlah' => $jumlahbarang,
                'peminjam' => $nama,
                'organisasi' => $namaOrmawa,
                'waktu_pinjam' => date('Y-m-d'),
            );

            $updateStok = $jumlahStokGudang - $jumlahbarang;

            $updateStok = array(
                "stok" => $jumlahStokGudang - $jumlahbarang,
            );

            gudang::where('namaBarang', $request->namaBarang)->update($updateStok);
            DataPeminjaman::create($isipeminjaman);
            Bag::create($validatedData);
            return redirect('/dashboard/bags')->with('success', 'Barang telah dipinjam!');
        } else {
            return redirect('/dashboard/bags')->with('failure', 'Barang digudang tidak cukup!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Bag $bag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bag $bag)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bag $bag)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bag $bag)
    {

        // ndak tau bisa apa ndak


        $jumlahStokGudang = gudang::where('namaBarang', $bag->namaBarang)->first()->stok;
        // ndak tau bisa apa ndak
        $jumlahbarang = (int)$bag['jumlah'];
        $updateStok = array(
            "stok" => $jumlahStokGudang + $jumlahbarang,
        );

        gudang::where('namaBarang', $bag->namaBarang)->update($updateStok);
        Bag::destroy($bag->id);
        return redirect('/dashboard/bags')->with('success', 'Barang telah dikembalikan!');
    }
}
