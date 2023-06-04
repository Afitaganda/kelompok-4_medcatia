@extends('layouts.app')

@section('content')

<div class="container-fluid" style="padding-top: 90px">

    <!-- Page Heading -->
    <h1 class="h3 mb-5 text-gray-800">Edit Pricelist</h1>

    <!-- DataTales Example -->
    <form action="{{ url('/price/update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{$price->id}}"/>
        {{-- <div class="mb-3">
            <label for="number" class="form-label">Nomer</label>
            <input type="number" class="form-control" id="number" name="number">
        </div> --}}
        <div class="mb-3">
            <label for="service" class="form-label">Layanan</label>
            <input type="text" class="form-control" id="service" name="service" value="{{$price->service}}">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Harga</label>
            <input type="text" class="form-control" id="price" name="price" value="{{$price->price}}">
        </div>
        <a href="{{ url('/price/update')}}" class="btn btn-secondary">Kembali</a>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>

@endsection