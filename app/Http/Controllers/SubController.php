<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kriteria;
use App\Models\kriteria_sub;

class SubController extends Controller
{
    public function index()
    {
        $sub = kriteria_sub::orderBy('id_kriteria')->orderBy('faktor')->orderBy('id')->get();

        return view('tpk_kriteria.kriteriasub',compact('sub'));
    }

    public function destroy($id)
    {
        kriteria_sub::find($id)->delete();

        return redirect('/tpk21/subkriteria');
    }

    public function restore($id)
    {
        kriteria_sub::withTrashed()->find($id)->restore();

        return redirect('/tpk21/subkriteria');
    }

    public function input()
    {
        $kriteria = kriteria::all();

        return view('tpk_kriteria.inputsub',compact('kriteria'));
    }

    public function store(Request $request)
    {
        $ids = kriteria_sub::count() + 1;

        $sub = new kriteria_sub;
        $sub->id = $ids;
        $sub->id_kriteria = $request->input('idk');
        $sub->sub = $request->input('sub');
        $sub->faktor = $request->input('faktor');
        $sub->nilai_ideal = $request->input('nideal');
        $sub->save();

        $listidp = penilaian::select('id_pegawai')->groupBy('id_pegawai')->get();
        $countidp = $listidp->count() + 1;
        $listp = pegawai::count();

        for ($i=1; $i <= $listp ; $i++) { 
            $idp = penilaian::where('id_pegawai',$i)->get();

            if ($idp->isNotEmpty()) {
                // echo 'gaada<br>';
                $idp2 = penilaian::where('id_pegawai',$i)->value('id_pegawai');
                // $id_sub = kriteria_sub::where('id_kriteria',$request->input('idk'))
                //         ->where('sub',$request->input('sub'))->value('id');
                // echo $id_sub.'<br>';
                $nilai = new Nilai;
                $nilai->id_pegawai = $idp2;
                $nilai->id_kategori = $request->input('idk');
                $nilai->id_sub_kat = $ids;
                $nilai->nilai = 0;
                $nilai->save();
            }
        }
        return redirect('/tpk21/subkriteria');
    }
}
