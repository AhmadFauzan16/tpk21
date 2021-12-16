@extends('layouts.app')

@section('title','Pegawai')

@section('content')
    <h1>Parameter</h1>
    <a href="/tpk21/parameter/input">
        {{-- @include('buttons.add') --}}
    </a>
    <hr>

    <table class="table table-hover table-bordered">
        <thead>
            <th>ID</th>
            <th>Rating</th>
            <th>Nilai</th>
        </thead>
        <tbody>
            @foreach ($param as $itemparam)
            <tr>
                <td>{{$itemparam->id}}</td>
                <td>{{$itemparam->rating}}</td>
                <td>{{$itemparam->nilai}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection