<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" type="text/css" href="resources/css/layanan.css">
    <title>Layanan</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>
<body>
    <div class="wrapper d-flex">
        <div class="table-responsive" style="padding-left: 50px; padding-right: 10px;">
            <h1>Tambah Layanan</h1>
            <form method="POST" action="{{ url('/price/update') }}" class="form">
                @csrf
                <input type="hidden" name="id" value="{{$price->id}}"/>
                <div class="row form-group">
                    <label class="col-lg-1">Layanan</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="service" placeholder="Layanan" value="{{$price->service}}">
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-lg-1">Harga</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="price" placeholder="Harga" value="{{$price->price}}">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-lg-12">
                        <button type="submit" class="btn btn-success">Simpan</button>
                        <a href="{{ url('/price/update')}}" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</body>
</html>
