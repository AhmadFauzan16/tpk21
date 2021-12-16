@extends('layouts.app')

@section('title','Penilaian Pegawai')

@section('content')
    <h1>Penilaian Pegawai</h1>
    <a href="/tpk21/nilai/input">
        @include('buttons.add')
    </a>
    <hr>

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    {{-- <th rowspan="2" class="width: 40%;">NO</th>
                    <th rowspan="2" class="width: 20%;">Nama Pegawai</th>
                    <th colspan="16" class="width: 40%;">Kategori</th> --}}
                    <th>NO</th>
                    <th>Nama Pegawai</th>
                    <th>Kategori</th>
                    <th>Sub Kategori</th>
                    <th>Nilai</th>
                </tr>
                {{-- <tr>
                    @foreach ($nilai as $n)
                    <th>{{$n->id_sub_kat}}</th>
                    @endforeach
                </tr> --}}
            </thead>
            <tbody>
                @foreach ($nilai as $n2)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$n2->id_pegawai}}</td>
                    <td>{{$n2->id_kategori}}</td>
                    <td>{{$n2->id_sub_kat}}</td>
                    {{-- @foreach ($nilai as $n3) --}}
                    <td>{{$n2->nilai}}</td>
                    {{-- @endforeach --}}
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection