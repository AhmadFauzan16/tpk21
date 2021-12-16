<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kriteria_sub;

class SubController extends Controller
{
    public function index()
    {
        $sub = kriteria_sub::all();

        return view('kriteriasub',compact('sub'));
    }

    public function input()
    {
        return view('tpk_kriteria.inputsub');
    }
}
