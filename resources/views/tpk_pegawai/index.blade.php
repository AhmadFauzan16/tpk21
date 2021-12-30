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
            <th>Status</th>
            <th>Nilai</th>
            <th>Edit</th>
            <th>Hapus</th>
        </thead>
        <tbody>
            @foreach ($pegawai as $itemPegawai)
            <tr>
                <td>{{$itemPegawai->id}}</td>
                <td>{{$itemPegawai->nama}}</td>
                <td>{{$itemPegawai->divisi}}</td>
                <td>{{$itemPegawai->posisi}}</td>
                <td>{{$itemPegawai->status}}</td>
                <td><a href="/tpk21/pegawai/nilai/{{$itemPegawai->id}}">@include('layouts.buttons.nilai')</a></td>
                <td><a href="/tpk21/pegawai/edit/{{$itemPegawai->id}}">@include('layouts.buttons.edit')</td>
                <td>
                    @if ($itemPegawai->trashed())
                        <form action="/tpk21/pegawai/re/{{$itemPegawai->id}}" method="post">
                            @csrf
                            @include('layouts.buttons.restore')
                        </form>
                    @else
                        <form action="/tpk21/pegawai/del/{{$itemPegawai->id}}" method="post">
                            @csrf
                            @method('delete')
                            @include('layouts.buttons.delete')
                        </form>
                    @endif
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
@endsection