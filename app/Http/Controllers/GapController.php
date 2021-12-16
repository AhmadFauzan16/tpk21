<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bobotgap;

class GapController extends Controller
{
    public function index()
    {
        $gap = bobotgap::all();

        return view('tpk_gap.index',compact('gap'));
    }

    public function input()
    {
        return view('tpk_gap.input');
    }
}
