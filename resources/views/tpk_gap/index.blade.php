@extends('layouts.app')

@section('title','Pegawai')

@section('content')
    <h1>Bobot Nilai Gap</h1>
    {{-- @include('buttons.add') --}}
    <hr>

    <table class="table table-hover table-bordered">
        <thead>
            <th>ID</th>
            <th>Selisih</th>
            <th>Bobot Nilai</th>
            <th>Keterangan</th>
        </thead>
        <tbody>
            @foreach ($gap as $itemgap)
            <tr>
                <td>{{$itemgap->id}}</td>
                <td>{{$itemgap->selisih}}</td>
                <td>{{$itemgap->bobotN}}</td>
                <td>{{$itemgap->ket}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection