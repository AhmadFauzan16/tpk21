@extends('layouts.app')

@section('title','Pegawai')

@section('content')
    <h1>Sub Kriteria</h1>
    @include('buttons.add')
    <hr>

    <table class="table table-hover table-bordered">
        <thead>
            <th>ID</th>
            <th>ID Kriteria</th>
            <th>Keterangan Sub Kriteria</th>
            <th>Faktor</th>
        </thead>
        <tbody>
            @foreach ($sub as $itemsubk)
            <tr>
                <td>{{$itemsubk->id}}</td>
                <td>{{$itemsubk->id_kriteria}}</td>
                <td>{{$itemsubk->sub}}</td>
                <td>{{$itemsubk->faktor}}</td>
            </tr>
            @endforeach

        </tbody>
    </table>
@endsection