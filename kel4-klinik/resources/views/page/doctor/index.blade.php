@extends('layouts.app')

@section('content')
    <div class="wrapper d-flex">
        <div class="table-responsive" style="padding-left: 50px; padding-right: 10px;">
            <h1>Jadwal Dokter</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                @auth
                <a class="btn btn-primary" href="{{ url('/doctor/tambah')}}">Tambah</a>
                @endauth
            </div>
            <table class="table table-bordered" style="margin-top: 30px;">
                <thead style="background-color:cornflowerblue;">
                    <tr>
                        <th class="aw">Nomor</th>
                        <th class="aw">Nama</th>
                        <th class="aw">Waktu</th>
                        @auth
                        <th class="aw">Ubah</th>
                        <th class="aw">Hapus</th>
                        @endauth
                    </tr>
                </thead>

                <tbody>
                    @foreach ($doctors as $doctor)
                    <tr>
                        <td class="aw-td">{{ $doctor->id }}</td>
                        <td class="aw-td">{{ $doctor->name }}</td>
                        <td class="aw-td">{{ $doctor->time }}</td>
                        @auth
                        <td>
                            <a class="btn btn-warning" href="{{ url('doctor/edit/'. $doctor->id) }}">Ubah</a>
                        </td>
                        <td>
                            {{-- <a class="btn btn-danger" href="{{ url('price/edit/'. $price->id) }}">Hapus</a> --}}
                            <form action="/doctor/hapus/{{ $doctor->id }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger pt-2 border-0" onclick="return confirm('anda yakin ingin menghapus?')"><span data-feather="trash"></span> Hapus</button>
                            </form>
                        </td>
                        @endauth
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> --}}

@endsection
