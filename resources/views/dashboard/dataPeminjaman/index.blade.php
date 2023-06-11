@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Barang yang dipinjam</h1>
    </div>
    @if (session()->has('success'))
        <div class="alert alert-success col-lg-8" role="alert">
            {{ session('success') }}
        </div>
    @endif
    @if (session()->has('failure'))
        <div class="alert alert-danger col-lg-8" role="alert">
            {{ session('failure') }}
        </div>
    @endif

    <head>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <div class="table-responsive small col-lg-8">
        <a href="/dashboard/bags/create" class="btn btn-primary mb-3">Tambah Barang</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Peminjam</th>
                    <th scope="col">Organisasi</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">jumlah</th>
                    <th scope="col">waktu Pinjam</th>
                    <th scope="col">pengembalian</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dataPeminjamans as $dataPeminjaman)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $dataPeminjaman->peminjam }}</td>
                        <td>{{ $dataPeminjaman->organisasi }}</td>
                        <td>{{ $dataPeminjaman->namaBarang }}</td>
                        <td>{{ $dataPeminjaman->jumlah }}</td>
                        <td>{{ $dataPeminjaman->waktu_pinjam }}</td>
                        <td>{{ $dataPeminjaman->pengembalian }}</td>




                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
