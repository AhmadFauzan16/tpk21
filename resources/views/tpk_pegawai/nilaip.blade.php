@extends('layouts.app')

@section('content')
    @foreach ($n->slice(0,1) as $y)
        <h1>Penialaian : {{$y->nama}}</h1>
    @endforeach
    <hr>

    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead>
                <th>Kategori</th>
                <th>Sub Kategori</th>
                <th>Nama</th>
                <th>Nilai Ideal</th>
                <th>Nilai Pegawai</th>
                <th>Selisih</th>
                <th>nilai setelah gap</th>
            </thead>
            <tbody>
                @foreach ($n as $in)
                    <tr>
                        <td>{{$in->kriteria}}</td>
                        <td>{{$in->sub}}</td>
                        <td>{{$in->nama}}</td>
                        <td>{{$in->nilai_ideal}}</td>
                        <td>{{$in->nilai}}</td>
                        <td>{{$in->yep}}</td>
                        <td>{{$in->yepp}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection