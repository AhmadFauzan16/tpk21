<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\pegawai;
use App\Models\penilaian;
use App\Models\kriteria;

class PegawaiController extends Controller
{
    public function index()
    {
        $pegawai = pegawai::withTrashed()->where('status','kontrak')->get();

        return view('tpk_pegawai.index',compact('pegawai'));
    }

    public function input()
    {
        return view('tpk_pegawai.input');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'divisi' => 'required',
            'posisi' => 'required',
            'status' => 'required'
        ]);

        $pegawai = new pegawai;
        $pegawai->nama = $request->nama;
        $pegawai->divisi = $request->divisi;
        $pegawai->posisi = $request->posisi;
        $pegawai->status = $request->status;
        $pegawai->save();

        return redirect('/tpk21/pegawai');
    }

    public function edit($id)
    {
        $p = pegawai::find($id);
        $p2 = pegawai::where('id',$id)->get();

        return view('tpk_pegawai.edit',compact('p','p2'));
    }

    public function update(Request $request, $id)
    {
        # code...
    }

    public function nilai($id)
    {
        $pegawai = pegawai::where('status','kontrak')->get();
        $subk = v_krit::all();
        $count = v_krit::count('sub');
        return view('tpk_nilai.input',compact('pegawai','subk','count'));
    }

    public function destroy($id)
    {
        pegawai::find($id)->delete();

        return redirect('/tpk21/pegawai');
    }

    public function restore($id)
    {
        pegawai::withTrashed()->find($id)->restore();

        return redirect('/tpk21/pegawai');
    }
}
