<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kriteria;
use App\Models\kriteria_sub;
use App\Models\penilaian;
use App\Models\pegawai;
use App\Models\nilai;

class KriteriaController extends Controller
{
    public function index()
    {
        $kriteria = kriteria::all();

        return view('tpk_kriteria.index',compact('kriteria'));
    }

    public function input()
    {
        $totalkriteria = kriteria::sum('bobot');
        if ($totalkriteria >= 100) {
            echo 'total bobot sudah mencapai 100%';
        }
        else {
            return view('tpk_kriteria.input');
        }
        // return view('tpk_kriteria.input');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'kriteria' => 'required',
            'bobot' => 'required',
            'bobotCF' => 'required',
            'bobotSF' => 'required',
        ]);

        $cf = $request->bobotCF;
        $sf = $request->bobotSF;
        $total = $cf + $sf;

        $totalkriteria = kriteria::sum('bobot');
        if ($totalkriteria >= 100) {
            echo 'total bobot sudah mencapai 100%';
        }
        else {
            if ($total > 100) {
                echo 'total bobot melebihi 100';
            }
            else {
                $kriteria = new kriteria;
                $kriteria->kriteria = $request->kriteria;
                $kriteria->bobot = $request->bobot;
                $kriteria->bobotCF = $request->bobotCF;
                $kriteria->bobotSF = $request->bobotSF;
                $kriteria->save();
                return redirect('/tpk21/kriteria');
            }
        }
    }

    public function edit($id)
    {
        $listk = kriteria::find($id);
        // echo $listk;
        return view('tpk_kriteria.edit', compact('listk'));
    }

    public function update(Request $request, $id)
    {
        kriteria::where('id',$id)->update([
            'kriteria' => $request->input('kriteria'),
            'bobot' => $request->input('bobot'),
            'bobotCF' => $request->input('bobotCF'),
            'bobotSF' => $request->input('bobotSF'),
        ]);

        return redirect('/tpk21/kriteria');
    }
}
