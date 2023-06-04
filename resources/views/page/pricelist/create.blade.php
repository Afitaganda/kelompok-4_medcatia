@extends('layouts.app')

@section('content')
<div class="container-fluid" style="padding-top: 90px">

    <!-- Page Heading -->
    <h1 class="h3 mb-5 text-gray-800">Tambah Pricelist</h1>

    <!-- DataTales Example -->
    <form action="{{ url('/price/simpan') }}" method="POST" enctype="multipart/form-data">
        @csrf
        {{-- <div class="mb-3">
            <label for="number" class="form-label">Nomer</label>
            <input type="number" class="form-control" id="number" name="number">
        </div> --}}
        <div class="mb-3">
            <label for="service" class="form-label">Layanan</label>
            <input type="text" class="form-control" id="service" name="service">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Harga</label>
            <input type="text" class="form-control" id="price" name="price">
        </div>
        <a href="{{ url('/price')}}" class="btn btn-secondary">Kembali</a>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection