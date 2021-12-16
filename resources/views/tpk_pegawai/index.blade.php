@extends('layouts.app')

@section('title','Pegawai')

@section('content')
    <h1>Pegawai</h1>
    <a href="/tpk21/pegawai/input">
        @include('buttons.add')
    </a>
    <hr>

    <table class="table table-hover table-bordered">
        <thead>
            <th>ID</th>
            <th>Nama</th>
            <th>Divisi</th>
            <th>Posisi</th>
        </thead>
        <tbody>
            @foreach ($pegawai as $itemPegawai)
            <tr>
                <td>{{$itemPegawai->id}}</td>
                <td>{{$itemPegawai->nama}}</td>
                <td>{{$itemPegawai->divisi}}</td>
                <td>{{$itemPegawai->posisi}}</td>
            </tr>
            @endforeach

        </tbody>
    </table>
@endsection