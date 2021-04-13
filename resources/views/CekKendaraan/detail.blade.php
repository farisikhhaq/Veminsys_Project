@extends('CekKendaraan.layout')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Detail Kendaraan
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>Plat Nomer: </b>{{ $kendaraan->platnomer }}</li>
                        <li class="list-group-item"><b>Nama Kendaraan: </b>{{ $kendaraan->namakendaraan }}</li>
                        <li class="list-group-item"><b>No_Mesin: </b>{{ $kendaraan->no_mesin }}</li>
                        <li class="list-group-item"><b>Selinder: </b>{{$kendaraan->selinder}}</li>
                        <li class="list-group-item"><b>Merk: </b>{{ $kendaraan->merk }}</li>
                        <li class="list-group-item"><b>Type: </b>{{ $kendaraan->type }}</li>
                        <li class="list-group-item"><b>Warna: </b>{{$kendaraan->warna}}</li>
                        <li class="list-group-item"><b>Bahan Bakar: </b>{{$kendaraan->bahan_bakar}}</li>
                        <li class="list-group-item"><b>Kilometer: </b>{{ $kendaraan->kilometer }}</li>
                        <li class="list-group-item"><b>Tahun: </b>{{$kendaraan->tahun}}</li>
                    </ul>
                </div>
                <a class="btn btn-success mt-3" href="/cekkendaraan">Kembali</a>
            </div>
        </div>
    </div>
@endsection
