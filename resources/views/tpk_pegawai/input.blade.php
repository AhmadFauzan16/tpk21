@extends('layouts.app')

@section('title','Input Pegawai')
    
@section('content')
    <h1>Input Data Pegawai</h1>
    <hr>
    <form action="/tpk21/pegawai/input" method="post" autocomplete="off">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control">
        </div>
        <div class="mb-3">
            <label for="divisi" class="form-label">Divisi</label>
            <select class="form-select" aria-label="Default select example" name="divisi">
                <option value="divisi1">Divisi 1</option>
                <option value="divisi2">Divisi 2</option>
                <option value="divisi3">Divisi 3</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="posisi" class="form-label">Posisi</label>
            <select class="form-select" aria-label="Default select example" name="posisi">
                <option value="Posisi1">Posisi 1</option>
                <option value="Posisi2">Posisi 2</option>
                <option value="Posisi3">Divisi 3</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Posisi</label>
            <select class="form-select" aria-label="Default select example" name="status">
                <option value="Tetap">Tetap</option>
                <option value="Kontrak">Kontrak</option>
            </select>
        </div>
        @include('buttons.submit')
    </form>
@endsection