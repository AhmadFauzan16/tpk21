<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pegawai;

class PegawaiController extends Controller
{
    public function index()
    {
        $pegawai = pegawai::all();

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
        ]);

        $pegawai = new pegawai;
        $pegawai->nama = $request->nama;
        $pegawai->divisi = $request->divisi;
        $pegawai->posisi = $request->posisi;
        $pegawai->save();

        return redirect('/tpk21/pegawai');
    }
}
