<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Form Isi</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card-mt-5">
                    <div class="card-body">
                        <h3 class="text-center">Test Data Input</h3>
                        <br>
                        @if (count($error) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($error->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <br />
                        <!-- form validasi -->
                        <form action="/proses" method="post">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="nama">No ID</label>
                                <input class="form-control" type="number" name="noid" value="{{ old('nama') }}">
                            </div>
                            <div class="form-group">
                                <label for="pekerjaan">No SIM</label>
                                <input class="form-control" type="number" name="nosim"
                                    value="{{ old('pekerjaan') }}">
                            </div>
                            <div class="form-group">
                                <label for="usia">Nama</label>
                                <input class="form-control" type="text" name="nama" value="{{ old('usia') }}">
                            </div>
                            <div class="form-group">
                                <label for="usia">Tanggal Lahir</label>
                                <input class="form-control" type="datetime" name="ttl" value="{{ old('usia') }}">
                            </div>
                            <div class="form-group">
                                <label for="usia">Alamat</label>
                                <input class="form-control" type="text" name="alamat" value="{{ old('usia') }}">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
