<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kriteria;

class KriteriaController extends Controller
{
    public function index()
    {
        $kriteria = kriteria::all();

        return view('tpk_kriteria.index',compact('kriteria'));
    }

    public function input()
    {
        return view('tpk_kriteria.input');
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
                echo 'total bobot CF + SF melebihi 100';
            }
            else {
                # code...
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
}
