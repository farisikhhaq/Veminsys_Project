@extends('CekKendaraan.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
            </div>
            <div class="float-right my-2">
                <a class="btn btn-success" href="{{ route('CekKendaraan.create') }}"> Menambah Kendaraan</a>
            </div>
            <form class="form-inline my-2 my-lg-0 mr-4" type="get" action="{{url ('CekKendaraan')}}">
                <input value="{{Request::get('keyword')}}" class="form-control mr-sm-2" name ="keyword" type="search" placeholder="Nama" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Plat Nomer</th>
            <th>No Mesin</th>
            <th>Selinder</th>
            <th>Merk</th>
            <th>Type</th>
            <th>Bahan Bakar</th>
            <th>Kilometer</th>
            <th>Tahun</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($posts as $kendaraan)
            <tr>

                <td>{{ $kendaraan->platnomer }}</td>
                <td>{{ $kendaraan->no_mesin }}</td>
                <td>{{ $kendaraan->selinder }}</td>
                <td>{{ $kendaraan->merk }}</td>
                <td>{{ $kendaraan->type }}</td>
                <td>{{ $kendaraan->warna }}</td>
                <td>{{ $kendaraan->bahan_bakar }}</td>
                <td>{{ $kendaraan->kilometer }}</td>
                <td>{{ $kendaraan->tahun }}</td>
                <td>
                    <form action="{{ route('cekkendaraan.destroy', ['cekkendaraan' => $kendaraan->platnomer]) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('cekkendaraan.show', $kendaraan->platnomer) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('cekkendaraan.edit', $kendaraan->platnomer) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <div class="d-flex float-right">
        {{$posts->links('pagination::bootstrap-4')}}
    </div>
@endsection
