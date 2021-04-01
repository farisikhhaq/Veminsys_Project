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
                        <li class="list-group-item"><b>Plat Nomer: </b>{{ $cekkendaraan->platnomer }}</li>
                        <li class="list-group-item"><b>No_Mesin: </b>{{ $cekkendaraan->no_mesin }}</li>
                        <li class="list-group-item"><b>Selinder: </b>{{$cekkendaraan->selinder}}</li>
                        <li class="list-group-item"><b>Merk: </b>{{ $cekkendaraan->merk }}</li>
                        <li class="list-group-item"><b>Type: </b>{{ $cekkendaraan->type }}</li>
                        <li class="list-group-item"><b>Warna: </b>{{$cekkendaraan->warna}}</li>
                        <li class="list-group-item"><b>Bahan Bakar: </b>{{$cekkendaraan->bahan_bakar}}</li>
                        <li class="list-group-item"><b>Kilometer: </b>{{ $cekkendaraan->kilometer }}</li>
                        <li class="list-group-item"><b>Tahun: </b>{{$cekkendaraan->tahun}}</li>
                    </ul>
                </div>
                <a class="btn btn-success mt-3" href="{{ route('mahasiswa.index') }}">Kembali</a>
            </div>
        </div>
    </div>
@endsection
