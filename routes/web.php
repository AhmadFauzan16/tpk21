<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\SubController;
use App\Http\Controllers\ParamController;
use App\Http\Controllers\GapController;
use App\Http\Controllers\NilaiController;

Route::get('/tpk21', function () {      
    return view('dashboard');
});

Route::get('/tpk21/pegawai', [PegawaiController::class,'index']);
Route::get('/tpk21/kriteria', [KriteriaController::class,'index']);
Route::get('/tpk21/subkriteria', [SubController::class,'index']);
Route::get('/tpk21/parameter', [ParamController::class,'index']);
Route::get('/tpk21/gap', [GapController::class,'index']);
Route::get('/tpk21/nilai', [NilaiController::class,'index']);

Route::get('/tpk21/pegawai/input', [PegawaiController::class,'input']);
Route::post('/tpk21/pegawai/input', [PegawaiController::class,'store']);

Route::get('/tpk21/parameter/input', [ParamController::class,'input']);
Route::post('/tpk21/parameter/input', [ParamController::class,'store']);

Route::get('/tpk21/kriteria/input', [KriteriaController::class,'input']);
Route::post('/tpk21/kriteria/input', [KriteriaController::class,'store']);

Route::get('/tpk21/nilai/input', [NilaiController::class,'input']);
Route::post('/tpk21/nilai/input', [NilaiController::class,'store']);
