<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Nilai;
use App\Models\Pegawai;
use App\Models\kriteria;
use App\Models\kriteria_sub;
use App\Models\v_krit;
use App\Models\penilaian;

class NilaiController extends Controller
{
    public function index()
    {
        $nilai = nilai::orderBy('id_pegawai','asc')->get();

        return view('tpk_nilai.index',compact('nilai'));
    }

    public function input($id)
    {
        $pegawai = nilai::where('id_pegawai',$id)->get();
        $subk = v_krit::all();
        $count = v_krit::count('sub');

        if ($pegawai->isEmpty()) {
            $pegawai = pegawai::where('id',$id)->get();
            $pn = v_krit::all();
            return view('tpk_nilai.input',compact('pegawai','subk','count','pn'));
        } else {
            $pn = penilaian::where('id_pegawai',$id)->get();
            return view('tpk_nilai.edit',compact('pegawai','subk','count','pn'));
        }
    }

    public function store(Request $request)
    {
        $find = nilai::where('id_pegawai', $request->input('nama'))->get();

        if ($find->isEmpty()) {
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
            return redirect('/tpk21/pegawai');   
        }
        else {
            echo "data dh ada";
        }
    }

    public function hasil()
    {
        return view('tpk_nilai.hasil');
    }

    public function updatenilai(Request $request)
    {
        $id = $request->input('idp');
        $find = nilai::where('id_pegawai',$id)->get();
        $count = v_krit::count('sub');

        if ($find->isEmpty()) {
            for ($i=1; $i <= $count ; ++$i) {
                $krit =  'krit'.$i;
                $sub =  'sub'.$i;
                $n2 = 'nilai'.$i;
                $nilai = new Nilai;
                $nilai->id_pegawai = $id;
                $nilai->id_kategori = $request->input($krit);
                $nilai->id_sub_kat = $request->input($sub);
                $nilai->nilai = $request->input($n2);
                $nilai->save();
                // echo 'krit = '.$request->input($krit).'<br>sub = '.$request->input($sub).'<br>n2 = '.
                // $request->input($n2).'<hr>';
            } 
        } else {
            Nilai::where('id_pegawai',$id)->delete();
            for ($i=1; $i <= $count ; ++$i) {
                $krit =  'krit'.$i;
                $sub =  'sub'.$i;
                $n2 = 'nilai'.$i;
                $nilai = new Nilai;
                $nilai->id_pegawai = $id;
                $nilai->id_kategori = $request->input($krit);
                $nilai->id_sub_kat = $request->input($sub);
                $nilai->nilai = $request->input($n2);
                $nilai->save();
                // echo 'krit = '.$request->input($krit).'<br>sub = '.$request->input($sub).'<br>n2 = '.
                // $request->input($n2).'<hr>';
            }
        }
        return redirect('/tpk21/pegawai');  
    }
}
