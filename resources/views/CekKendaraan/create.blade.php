@extends('CekKendaraan.layout')
@section('content')

    <div class="container mt-5">

        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Tambah Kendaraan
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="post" action="{{ route('cekkendaraan.store') }}" id="myForm">
                        @csrf
                        <div class="form-group">
                            <label for="platnomer">Plat Nomer</label>
                            <input type="text" name="platnomer" class="form-control" id="platnomer" ariadescribedby="platnomer">
                        </div>
                        <div class="form-group">
                            <label for="namakendaraan">Nama Kendaraan</label>
                            <input type="text" name="namakendaraan" class="form-control" id="namakendaraan" ariadescribedby="namakendaraan">
                        </div>
                        <div class="form-group">
                            <label for="no_mesin">No Mesin</label>
                            <input type="text" name="no_mesin" class="form-control" id="no_mesin" ariadescribedby="no_mesin">
                        </div>
                        <div class="form-group">
                            <label for="selinder">Selinder</label>
                            <input type="text" name="selinder" class="form-control" id="selinder" ariadescribedby="selinder" >
                        </div>
                        <div class="form-group">
                            <label for="merk">Merk</label>
                            <input type="text" name="merk" class="form-control" id="merk" ariadescribedby="merk">
                        </div>
                        <div class="form-group">
                            <label for="type">Type</label>
                            <input type="text" name="type" class="form-control" id="type" ariadescribedby="type">
                        </div>
                        <div class="form-group">
                            <label for="warna">Warna</label>
                            <input type="text" name="warna" class="form-control" id="warna" ariadescribedby=warna">
                        </div>
                        <div class="form-group">
                            <label for="bahan_bakar">Bahan Bakar</label>
                            <input type="text" name="bahan_bakar" class="form-control" id="bahan_bakar" ariadescribedby="bahan_bakar">
                        </div>
                        <div class="form-group">
                            <label for="kilometer">Kilometer</label>
                            <input type="text" name="kilometer" class="form-control" id="kilometer" ariadescribedby="kilometer">
                        </div>
                        <div class="form-group">
                            <label for="tahun">Tahun</label>
                            <input type="text" name="tahun" class="form-control" id="tahun" ariadescribedby="tahun">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
