@extends('layouts.app')

@section('title','Pegawai')

@section('content')
    <h1>Sub Kriteria</h1>
    <a href="/tpk21/kriteria/sub/input">
        @include('buttons.add')
    </a>
    <hr>

    <table class="table table-hover table-bordered">
        <thead>
            <th>No</th>
            <th>ID Kriteria</th>
            <th>Keterangan Sub Kriteria</th>
            <th>Faktor</th>
            <th>Edit</th>
            <th>Hapus</th>
        </thead>
        <tbody>
            @foreach ($sub as $itemsubk)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$itemsubk->id_kriteria}}</td>
                <td>{{$itemsubk->sub}}</td>
                <td>{{$itemsubk->faktor}}</td>
                <td>
                    <a href="/tpk21/kriteria/edit/{{$itemsubk->id}}">
                        @include('layouts.buttons.edit')
                    </a>
                </td>
                <td>
                    @if ($itemsubk->trashed())
                        <form method="post" action="/tpk21/kriteria/re/{{$itemsubk->id}}">
                            @csrf
                            @include('layouts.buttons.restore')
                        </form>
                    @else
                        <form method="post" action="/tpk21/kriteria/sub/del/{{$itemsubk->id}}">
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