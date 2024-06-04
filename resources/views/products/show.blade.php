<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Data Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <img src="{{ asset('/storage/products/'.$product->image) }}" class="rounded" style="width: 64%">
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <h1>{{ $product->nama }}</h1>
                        <hr/>
                        
                        <p>{{ $product->jeniskelamin }}</p>
                        <p>{{ $product->jabatan }}</p>
                        <p>{{ $product->job }}</p>
                        
                        <hr/>
                        <p>Alamat: {!! $product->alamat !!}</p>
                        <p>Tempat Lahir: {{ $product->tempatlahir }}</p>
                        <p>Tanggal Lahir: {{ $product->tanggallahir }}</p>
                        <p>Masuk Kerja: {{ $product->masukkerja }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>