@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Pinjam Barang </h1>
    </div>
    <div class="col-lg-8">
        <form action="/dashboard/bags"method="post" class="mb-5">
            @csrf
            {{-- <div class="mb-3">
                <label for="namaBarang" class="form-label">Nama Barang</label>
                <input type="text" class="form-control @error('namaBarang') is-invalid @enderror" id="namaBarang"
                    name="namaBarang" required autofocus value="{{ old('namaBarang') }}">
                @error('namaBarang')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div> --}}
            <div class="mb-3">
                <label for="namaBarang" class="form-label">Category</label>
                <select class="form-select @error('namaBarang') is-invalid @enderror"
                    name="namaBarang"id="namaBarang"aria-label="Default select example">
                    @foreach ($gudangs as $gudang)
                        <option value="{{ $gudang->namaBarang }}">{{ $gudang->namaBarang }}</option>

                        @error('namaBarang')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="pengembalian">akan dikembalikan pada:</label>

                <input type="date"name="pengembalian" id="pengembalian" name="trip-start" value="{{ date('Y-m-d') }}"
                    min="{{ $ldate = date('Y-m-d') }}">
            </div>
            <div class="mb-3">
                <label for="jumlah" class="form-label">jumlah</label>
                <input type="number" class="@error('stok') is-invalid @enderror" id="jumlah" name="jumlah">
                @error('jumlah')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Pinjam Barang</button>


        </form>
    </div>
@endsection
