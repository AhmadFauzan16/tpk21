@extends('layouts.app')

@section('title','Input Kriteria')
    
@section('content')
    <h1>Input Data Kriteria</h1>
    <hr>
    <form action="/tpk21/kriteria/input" method="post" autocomplete="off">
        @csrf
        <div class="mb-3">
            <label for="kriteria" class="form-label">Kriteria</label>
            <input type="text" name="kriteria" class="form-control">
        </div>
        <div class="mb-3">
            <label for="bobot" class="form-label">Bobot</label>
            <input type="number" name="bobot" class="form-control">
        </div>
        <div class="mb-3">
            <label for="bobotCF" class="form-label">Bobot Core Factor</label>
            <input type="number" name="bobotCF" class="form-control" max="100" min="0">
        </div>
        <div class="mb-3">
            <label for="bobotSF" class="form-label">Bobot Secondary Factor</label>
            <input type="number" name="bobotSF" class="form-control" max="100" min="0">
        </div>
        @include('buttons.submit')
    </form>
@endsection