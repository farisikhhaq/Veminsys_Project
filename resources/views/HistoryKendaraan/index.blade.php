@extends('CekKendaraan.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
            </div>
            {{-- <div class="float-right my-2">
                <a class="btn btn-success" href="{{ route('cekkendaraan.create') }}"> Menambah Kendaraan</a>
            </div>  --}}
            <form class="form-inline my-2 my-lg-0 mr-4" type="get" action="{{url ('HistoryKendaraan')}}">
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
            <th>Jenis Kendaraan</th>
            <th>Laka Kecelakaan</th>
            <th>Merk</th>
            <th>Type</th>
            <th>Bahan Bakar</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($posts as $historykendaraan)
            <tr>

                <td>{{ $historykendaraan->platnomer }}</td>
                <td>{{ $historykendaraan->jenis_kendaraan }}</td>
                <td>{{ $historykendaraan->laka_kecelakaan }}</td>
                <td>{{ $historykendaraan->pelanggaran }}</td>
                <td>{{ $historykendaraan->tanggal_kejadian }}</td>
                <td>{{ $historykendaraan->tempat_kejadian }}</td>

                <td>
                    <form action="{{ route('HistoryKendaraan.destroy', ['HistoryKendaraan' => $historykendaraan->platnomer]) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('HistoryKendaraan.show', $historykendaraan->platnomer) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('HistoryKendaraan.edit', $historykendaraan->platnomer) }}">Edit</a>
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
