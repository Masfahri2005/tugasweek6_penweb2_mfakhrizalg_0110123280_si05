<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\ParamedikController;
use App\Http\Controllers\PeriksaController;
use App\Http\Controllers\UnitkerjaController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/biodata', function () {
    return '<h5>Nama: Muhammad Fakhrizal Garnindyo</h5><br><h5>NIM: 01101232880</h5><br><h5>Rombel: SI05</h5>';
});

Route::get('/profil', function () {
    return view('profil',[
        "nama" => "Muhammad Fakhrizal Garnindyo",
        "umur" => 19,
        "email" => "fakhrizal@sample.com",
        "kampus" => "STT terpadu Nurul Fikri",
        "alamat" => "Bogor"

    ]);
});


Route::get('/admin', [AdminController::class, 'index']);
Route::get('/pasien', [PasienController::class, 'index']);
Route::post('/pasien/store', [PasienController::class, 'store']);
Route::get('/kelurahan', [KelurahanController::class, 'index']);
Route::get('/unitkerja', [UnitKerjaController::class, 'index']);
Route::get('/paramedik', [ParamedikController::class, 'index']);
Route::get('/periksa', [PeriksaController::class, 'index']);