@extends('layouts.app')

@section('content')

<div class="container-fluid" style="padding-top: 90px">

    <!-- Page Heading -->
    <h1 class="h3 mb-5 text-gray-800">Edit Jadwal Dokter</h1>

    <!-- DataTales Example -->
    <form action="{{ url('/doctor/update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{$doctor->id}}"/>
        {{-- <div class="mb-3">
            <label for="number" class="form-label">Nomer</label>
            <input type="number" class="form-control" id="number" name="number">
        </div> --}}
        <div class="mb-3">
            <label for="name" class="form-label">Nama Dokter</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$doctor->name}}">
        </div>
        <div class="mb-3">
            <label for="time" class="form-label">Jadwal Pelayanan</label>
            <input type="text" class="form-control" id="time" name="time" value="{{$doctor->time}}">
        </div>
        <a href="{{ url('/doctor/update')}}" class="btn btn-secondary">Kembali</a>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>

@endsection