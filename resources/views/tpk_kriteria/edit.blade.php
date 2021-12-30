@extends('layouts.app')

@section('title','Input Kriteria')
    
@section('content')@include('layouts.alert')

    <h1>Input Data Kriteria</h1>
    <hr>
    <form action="/tpk21/kriteria/edit/{{$listk->id}}" method="post" autocomplete="off">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="kriteria" class="form-label">Kriteria</label>
            <input type="text" name="kriteria" class="form-control" value="{{old('kriteria') ? old('kriteria') : $listk->kriteria}}"> 
        </div>
        <div class="mb-3">
            <label for="bobot" class="form-label">Bobot</label>
            <input type="number" name="bobot" class="form-control" value="{{old('bobot') ? old('bobot') : $listk->bobot}}">
        </div>
        <div class="mb-3">
            <label for="bobotCF" class="form-label">Bobot Core Factor</label>
            <input type="number" name="bobotCF" class="form-control" max="100" min="0" value="{{old('bobotCF') ? old('bobotCF') : $listk->bobotCF}}">
        </div>
        <div class="mb-3">
            <label for="bobotSF" class="form-label">Bobot Secondary Factor</label>
            <input type="number" name="bobotSF" class="form-control" max="100" min="0" value="{{old('bobotSF') ? old('bobotSF') : $listk->bobotSF}}">
        </div>
        @include('buttons.submit')
    </form>
@endsection