@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Welcome back, {{ auth()->user()->name }}</h1>

    </div>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Gudang</h1>
    </div>
    @if (session()->has('success'))
        <div class="alert alert-success col-lg-8" role="alert">
            {{ session('success') }}
        </div>
    @endif


    <head>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <div class="table-responsive small col-lg-8">
        @can('admin')
            <a href="/dashboard/gudangs/create" class="btn btn-primary mb-3">Tambah Barang</a>
        @endcan
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Stok</th>
                    @can('admin')
                        <th scope="col">Action</th>
                    @endcan
                </tr>
            </thead>
            <tbody>
                @foreach ($gudangs as $gudang)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $gudang->namaBarang }}</td>
                        <td>{{ $gudang->stok }}</td>
                        @can('admin')
                            <td>

                                <a href="/dashboard/gudangs/{{ $gudang->id }}/edit"class="badge bg-warning pb-0"><i
                                        class="bi bi-pencil"></i></a>
                                <form action="/dashboard/gudangs/{{ $gudang->id }}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="badge bg-danger pb-0 border-0" onclick="return confirm('Are You Sure?')"><i
                                            class="bi bi-x-circle"></i></button>
                                </form>



                            </td>
                        @endcan
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
