@extends('layouts.app')

@section('title','Input Pegawai')
    
@section('content')
    <h1>Input Data Pegawai</h1>
    <hr>
    <form action="/tpk21/pegawai/edit/{{$p->id}}" method="post" autocomplete="off">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" value="{{old('nama') ? old('nama') : $p->nama}}">
        </div>
        <div class="mb-3">
            <label for="divisi" class="form-label">Divisi</label>
            <select class="form-select" aria-label="Default select example" name="divisi">
                @foreach ($p2 as $yep)
                    <option value="{{$yep->divisi}}">{{$yep->divisi}}</option>
                @endforeach
                <option value="divisi1">Divisi 1</option>
                <option value="divisi2">Divisi 2</option>
                <option value="divisi3">Divisi 3</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="posisi" class="form-label">Posisi</label>
            <select class="form-select" aria-label="Default select example" name="posisi">
                @foreach ($p2 as $yep)
                    <option value="{{$yep->posisi}}">{{$yep->posisi}}</option>
                @endforeach
                <option value="Posisi1">Posisi 1</option>
                <option value="Posisi2">Posisi 2</option>
                <option value="Posisi3">Divisi 3</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Posisi</label>
            <select class="form-select" aria-label="Default select example" name="status">
                @foreach ($p2 as $yep)
                    <option value="{{$yep->status}}">{{$yep->status}}</option>
                @endforeach
                <option value="Tetap">Tetap</option>
                <option value="Kontrak">Kontrak</option>
            </select>
        </div>
        @include('buttons.submit')
    </form>
@endsection