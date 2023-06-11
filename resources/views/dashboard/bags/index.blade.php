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
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Jumlah yang dipinjam</th>
                    <th scope="col">Tanggal Peminjaman</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bags as $bag)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $bag->namaBarang }}</td>
                        <td>{{ $bag->jumlah }}</td>
                        <td>{{ $bag->created_at }}</td>

                        <td>
                            <form action="/dashboard/bags/{{ $bag->id }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-success pb-0 border-0"
                                    onclick="return confirm('Apakah Anda Yakin?')"><i
                                        class="bi bi-collection"></i></i>Kembalikan</button>
                            </form>


                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
