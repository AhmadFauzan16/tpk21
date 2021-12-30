@extends('layouts.app')

@section('title','Pegawai')

@section('content')
    <h1>Kriteria</h1>
    <a href="/tpk21/kriteria/input">
        @include('buttons.add')
    </a>
    <hr>

    <table class="table table-hover table-bordered">
        <thead>
            <th>ID</th>
            <th>Kriteria</th>
            <th>Bobot Keseluruhan</th>
            <th>Bobot CF</th>
            <th>Bobot SF</th>
            <th>Edit</th>
            <th>Hapus</th>
        </thead>
        <tbody>
            @foreach ($kriteria as $itemkriteria)
            <tr>
                <td>{{$itemkriteria->id}}</td>
                <td>{{$itemkriteria->kriteria}}</td>
                <td>{{$itemkriteria->bobot}}</td>
                <td>{{$itemkriteria->bobotCF}}</td>
                <td>{{$itemkriteria->bobotSF}}</td>
                <td>
                    <a href="/tpk21/kriteria/edit/{{$itemkriteria->id}}">
                        @include('layouts.buttons.edit')
                    </a>
                </td>
                <td>
                    @if ($itemkriteria->trashed())
                        <form method="post" action="/tpk21/kriteria/re/{{$itemkriteria->id}}">
                            @csrf
                            @include('layouts.buttons.restore')
                        </form>
                    @else
                        <form method="post" action="/tpk21/kriteria/del/{{$itemkriteria->id}}">
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