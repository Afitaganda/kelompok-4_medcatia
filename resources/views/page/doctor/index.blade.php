@extends('layouts.app')

@section('content')
<div class="container-fluid " style="padding-top: 90px">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Jadwal Dokter</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Jadwal Dokter</h6>
        </div>
        @Auth
        <div class="card-header py-3">
            <a href="{{ url('/doctor/tambah')}}"><button class="btn btn-success">+ Tambah Jadwal Dokter</button></a>
        </div>
        @endauth
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Nomer</th>
                        <th>Nama</th>
                        <th>Waktu</th>
                        @auth
                            <th>Aksi</th>
                        @endauth
                    </tr>
                    </thead>
                    <tbody>
                        @php
                            $counter = 0;
                        @endphp
                        @foreach ($doctors as $doctor)
                        @php
                            $counter += 1;
                        @endphp
                        <tr>
                            {{-- <td class="aw-td">{{ $doctor->id }}</td> --}}
                            <td class="aw-td">{{ $counter}}</td>
                            <td class="aw-td">{{ $doctor->name }}</td>
                            <td class="aw-td">{{ $doctor->time }}</td>
                            @auth
                            <td class="d-flex">                                  
                                <a href="{{ url('doctor/edit/'. $doctor->id) }}"  style="padding-right: 20px;">
                                    <button class="btn btn-warning">Edit</button>
                                </a>
                                <form action="/doctor/hapus/{{ $doctor->id }}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger pt-2 border-0" onclick="return confirm('anda yakin ingin menghapus?')"><span data-feather="trash"></span> Hapus</button>
                                </form>
                                {{-- <form method="POST" action="{{ route("pemilik-bahan-baku.destroy", $bahan_baku->id) }}">
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form> --}}
                            </td>
                            @endauth
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
