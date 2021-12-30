@extends('layouts.app')

@section('title','input nilai pegawai')

@section('content')
    <h1>Input Penilaian Pegawai</h1>
    <hr>
    <div class="mt-3">

        <form action="/tpk21/pegawai/nilai/update/{id}" method="post" autocomplete="off" class="mt-3">
            @csrf
            <div class="mb-3">
                @foreach ($pn->slice(0,1) as $p)
                <div class="row">
                    <div class="col-6">
                        <label for="idp" class="form-label">ID Pegawai</label>
                        <input type="text" readonly class="form-control" value="{{$p->id_pegawai}}" name="idp">  
                    </div>
                    <div class="col-6">
                        <label for="nama" class="form-label">Nama Pegawai</label>
                        <input type="text" readonly class="form-control" value="{{$p->nama}}" name="nama">  
                    </div>
                </div>
                @endforeach
                {{-- <input type="text" readonly class="form-control" value="@php echo $pegawai; @endphp"> --}}
                {{-- <select class="form-select" name="nama">
                    @foreach ($pegawai as $p)
                    <option value="{{$p->id}}">{{$p->nama}}</option>
                    @endforeach
                </select> --}}
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
                        @foreach ($pn as $sk)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$sk->kriteria}}<input type="text" hidden value="{{$sk->id_k}}" name="krit@php echo ++$i; @endphp"></td>
                            <td>{{$sk->sub}}<input type="text" hidden value="{{$sk->id_sub}}" name="sub@php echo $i; @endphp"></td>
                            <td>{{$sk->faktor}}</td>
                            <td>{{$sk->nilai_ideal}}</td>
                            <td><input required class="form-control" value="{{old('nilai') ? old('nilai') : $sk->nilai}}" 
                                type="number" min="0" max="5" name="nilai@php echo $i; @endphp">
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection