<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Nilai;
use App\Models\Pegawai;
use App\Models\kriteria;
use App\Models\kriteria_sub;
use App\Models\v_krit;

class NilaiController extends Controller
{
    public function index()
    {
        $nilai = nilai::all();

        return view('tpk_nilai.index',compact('nilai'));
    }

    public function input()
    {
        $pegawai = pegawai::where('status','kontrak')->get();
        $subk = v_krit::all();
        $count = v_krit::count('sub');
        return view('tpk_nilai.input',compact('pegawai','subk','count'));
    }

    public function store(Request $request)
    {
        $count = v_krit::count('sub');

        for ($i=1; $i < $count + 1 ; ++$i) {
            $krit =  'krit'.$i;
            $sub =  'sub'.$i;
            $n2 = 'nilai'.$i;
            $nilai = new Nilai;
            $nilai->id_pegawai = $request->input('nama');
            $nilai->id_kategori = $request->input($krit);
            $nilai->id_sub_kat = $request->input($sub);
            $nilai->nilai = $request->input($n2);
            $nilai->save();
        }
        return redirect('/tpk21/nilai');
    }
}
