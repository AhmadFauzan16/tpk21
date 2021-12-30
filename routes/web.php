<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\SubController;
use App\Http\Controllers\ParamController;
use App\Http\Controllers\GapController;
use App\Http\Controllers\NilaiController;

Route::get('/tpk21', [PegawaiController::class,'index']);
Route::get('/tpk21/pegawai', [PegawaiController::class,'index']);
Route::get('/tpk21/kriteria', [KriteriaController::class,'index']);
Route::get('/tpk21/subkriteria', [SubController::class,'index']);
Route::get('/tpk21/parameter', [ParamController::class,'index']);
Route::get('/tpk21/gap', [GapController::class,'index']);
Route::get('/tpk21/nilai', [NilaiController::class,'index']);

Route::get('/tpk21/pegawai/input', [PegawaiController::class,'input']);
Route::post('/tpk21/pegawai/input', [PegawaiController::class,'store']);
Route::get('/tpk21/pegawai/edit/{id}',[PegawaiController::class,'edit']);
Route::put('/tpk21/pegawai/edit/{id}',[PegawaiController::class,'update']);
Route::get('/tpk21/pegawai/nilai/{id}',[NilaiController::class,'input']);
Route::post('/tpk21/pegawai/nilai/update/{id}',[NilaiController::class,'updatenilai']);

Route::get('/tpk21/parameter/input', [ParamController::class,'input']);
Route::post('/tpk21/parameter/input', [ParamController::class,'store']);

Route::get('/tpk21/kriteria/input', [KriteriaController::class,'input']);
Route::post('/tpk21/kriteria/input', [KriteriaController::class,'store']);

Route::get('/tpk21/kriteria/sub/input', [SubController::class,'input']);
Route::post('/tpk21/kriteria/sub/input', [SubController::class,'store']);
Route::delete('/tpk21/kriteria/sub/del/{id}', [SubController::class,'destroy']);

// Route::get('/tpk21/nilai/input', [NilaiController::class,'input']);
// Route::post('/tpk21/nilai/input', [NilaiController::class,'store']);

Route::get('/tpk21/hasil',[NilaiController::class,'hasil']);

Route::delete('/tpk21/pegawai/del/{id}', [PegawaiController::class,'destroy']);
Route::post('/tpk21/pegawai/re/{id}', [PegawaiController::class,'restore']);

Route::get('/tpk21/kriteria/edit/{id}', [KriteriaController::class,'edit']);
Route::put('/tpk21/kriteria/edit/{id}', [KriteriaController::class,'update']);
