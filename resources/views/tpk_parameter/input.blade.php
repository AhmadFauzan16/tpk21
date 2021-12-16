@extends('layouts.app')

@section('title','Input Parameter')
    
@section('content')
    <h1>Input Data Parameter</h1>
    <hr>
    <form action="/tpk21/parameter/input" method="post" autocomplete="off">
        @csrf
        <div class="mb-3">
            <label for="rating" class="form-label">Rating</label>
            <input type="text" name="rating" class="form-control">
        </div>
        <div class="mb-3">
            <label for="nilai" class="form-label">Nilai</label>
            <input type="number" name="nilai" class="form-control">
        </div>
        @include('buttons.submit')
    </form>
@endsection