<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TAMBAH DATA PEGAWAI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">

                            @csrf
                            @method('PUT')

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">FOTO</label>
                                <input type="file" class="form-control @error('foto') is-invalid @enderror" name="foto">

                                <!-- error message untuk foto -->
                                @error('foto')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">NAMA LENGKAP</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama', $product->nama) }}" placeholder="Masukkan Nama">

                                <!-- error message untuk nama -->
                                @error('nama')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label class="font-weight-bold">ALAMAT LENGKAP</label>
                                <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat', $product->alamat) }}" placeholder="Alamat Lengkap"></textarea>

                                <!-- error message untuk alamat -->
                                @error('alamat')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        <div class="row">
                         <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Tempat Lahir</label>
                                <input type="text" class="form-control @error('tempatlahir') is-invalid @enderror" name="tempatlahir" value="{{ old('tempatlahir', $product->tempatlahir) }}" placeholder="Tempat Lahir">

                                <!-- error message untuk alamat_lengkap -->
                                @error('tempatlahir')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Tanggal Lahir</label>
                                <input type="date" class="form-control @error('tanggallahir') is-invalid @enderror" name="tanggallahir" value="{{ old('tanggallahir', $product->tanggallahir) }}" placeholder="tanggal lahir">

                                <!-- error message untuk alamat_lengkap -->
                                @error('tanggallahir')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                         </div>
                        </div>
                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Jenis Kelamin</label>
                                <input type="text" class="form-control @error('jeniskelamin') is-invalid @enderror" name="jeniskelamin" value="{{ old('jeniskelamin'), $product->jeniskelamin }}" placeholder="jeniskelamin">

                                <!-- error message untuk alamat_lengkap -->
                                @error('jeniskelamin')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Jabatan</label>
                                <input type="text" class="form-control @error('jabatan') is-invalid @enderror" name="jabatan" value="{{ old('jabatan', $product->jabatan) }}" placeholder="jabatan">

                                <!-- error message untuk alamat_lengkap -->
                                @error('jabatan')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Mulai Masuk Kerja</label>
                                <input type="date" class="form-control @error('mulaimasukkerja') is-invalid @enderror" name="mulaimasukkerja" value="{{ old('mulaimasukkerja', $product->mulaimasukkerja) }}" placeholder="mulai masuk kerja">

                                <!-- error message untuk alamat_lengkap -->
                                @error('mulaimasukkerja')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">jobdesc</label>
                                <textarea class="form-control @error('jobdesc') is-invalid @enderror" name="jobdesc" rows="5" placeholder="Masukkan jobdesc Product">{{ old('jobdesc', $product->jobdesc) }}</textarea>

                                <!-- error message untuk jobdesc -->
                                @error('jobdesc')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-md btn-primary me-3">SAVE</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'job_desc' );
    </script>
</body>
</html>