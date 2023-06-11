@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Perbarui Barang</h1>
    </div>
    <div class="col-lg-8">
        <form action="/dashboard/gudangs/{{ $gudang->id }}"method="post" class="mb-5">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="namaBarang" class="form-label">Nama Barang</label>
                <input type="text" class="form-control @error('namaBarang') is-invalid @enderror" id="namaBarang"
                    name="namaBarang" required autofocus value="{{ old('namaBarang', $gudang->namaBarang) }}">
                @error('namaBarang')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="stok" class="form-label">stok</label>

                <input type="number" class="@error('stok') is-invalid @enderror" id="stok" name="stok" required
                    value="{{ old('stok', $gudang->stok) }}">
                @error('stok')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>


            <button type="submit" class="btn btn-primary">Update post</button>


        </form>
    </div>
@endsection
