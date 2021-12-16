<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\parameter;

class ParamController extends Controller
{
    public function index()
    {
        $param = parameter::all();

        return view('tpk_parameter.index',compact('param'));
    }
    
    public function input()
    {
        return view('tpk_parameter.input');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'rating' => 'required',
            'nilai' => 'required',
        ]);

        $parameter = new parameter;
        $parameter->rating = $request->rating;
        $parameter->nilai = $request->nilai;
        $parameter->save();

        return redirect('/tpk21/parameter');
    }
}
