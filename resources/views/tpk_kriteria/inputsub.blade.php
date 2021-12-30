@extends('layouts.app')

@section('content')
    <h1>Tambah Sub Kategori</h1>
    <hr>

    <form action="/tpk21/kriteria/sub/input" method="post" autocomplete="off">
        @csrf
        <div class="mb-3">
            <label class="form-label" for="idk" >Kriteria</label>
            <select class="form-select" name="idk">
                @foreach ($kriteria as $k)
                    <option value="{{$k->id}}">{{$k->kriteria}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label" for="sub">Sub Kategori</label>
            <input type="text" class="form-control" name="sub">
        </div>
        <div class="mb-3">
            <label class="form-label" for="faktor">Faktor</label>
            <select class="form-select" name="faktor">
                <option value="CF">Core Factor</option>
                <option value="SF">Secondary Factor</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label" for="nideal">Nilai Ideal</label>
            <input type="number" class="form-control" min="1" max="5" name="nideal">
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
@endsection