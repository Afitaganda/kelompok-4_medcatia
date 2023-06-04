@extends('layouts.app')

@section('content')
    <div class="wrapper d-flex">
        <div class="table-responsive" style="padding-left: 50px; padding-right: 10px;">
            <h1>Layanan</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                @auth
                    <a class="btn btn-primary" href="{{ url('/price/tambah')}}">Tambah</a>
                @endauth
            </div>
            <table class="table table-bordered" style="margin-top: 30px;">
                <thead style="background-color:cornflowerblue;">
                    <tr>
                        <th class="aw">Nomor</th>
                        <th class="aw">Layanan</th>
                        <th class="aw">Harga</th>
                        @auth
                        <th class="aw">Ubah</th>
                        <th class="aw">Hapus</th>
                        @endauth
                    </tr>
                </thead>

                <tbody>
                    @foreach ($prices as $price)
                    <tr>
                        <td class="aw-td">{{ $price->id }}</td>
                        <td class="aw-td">{{ $price->service }}</td>
                        <td class="aw-td">{{ $price->price }}</td>
                        @auth
                        <td>
                            <a class="btn btn-warning" href="{{ url('price/edit/'. $price->id) }}">Ubah</a>
                        </td>
                        <td>
                            {{-- <a class="btn btn-danger" href="{{ url('price/edit/'. $price->id) }}">Hapus</a> --}}
                            <form action="/price/hapus/{{ $price->id }}" method="post" class="d-inline">
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



    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input class="form-control " type="text" placeholder="Nomor">
                    </div>
                    <div class="form-group">
                        <input class="form-control " type="text" placeholder="Layanan">
                    </div>
                    <div class="form-group">
                        <input class="form-control " type="text" placeholder="Harga">
                    </div>
                </div>
                <div class="modal-footer ">
                    <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Apakah anda yakin ingin menghapus ini?</div>
                </div>
                <div class="modal-footer ">
                    <button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
                </div>
            </div>
        </div>
    </div>

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> --}}

@endsection
