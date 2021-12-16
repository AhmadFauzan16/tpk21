@extends('layouts.app')

@section('title','input nilai pegawai')

@section('content')
    <h1>Input Penilaian Pegawai</h1>
    <hr>
    <div class="mt-3">

        <form action="/tpk21/nilai/input" method="post" autocomplete="off" class="mt-3">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Pegawai</label>
                <select class="form-select" name="nama">
                    @foreach ($pegawai as $p)
                    <option value="{{$p->id}}">{{$p->nama}}</option>
                    @endforeach
                </select>
            </div>

            <label for="tb" class="form-label">Penilaian</label>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <th style="width:10%">NO</th>
                        <th style="width:15%">Kriteria</th>
                        <th style="width:35%">Sub Kriteria</th>
                        <th style="width:10%">Faktor</th>
                        <th style="width:10%">Nilai Ideal</th>
                        <th style="width:20%">Nilai(1-5)</th>
                    </thead>
                    <tbody>
                        @php
                            $i = 0;
                        @endphp
                        @foreach ($subk as $sk)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$sk->kriteria}}<input type="text" hidden value="{{$sk->idk}}" name="krit@php echo ++$i; @endphp"></td>
                            <td>{{$sk->sub}}<input type="text" hidden value="{{$sk->ids}}" name="sub@php echo $i; @endphp"></td>
                            <td>{{$sk->faktor}}</td>
                            <td>{{$sk->ideal}}</td>
                            <td><input required class="form-control" type="number" min="0" max="5" name="nilai@php echo $i; @endphp"></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection