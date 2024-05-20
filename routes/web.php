<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/biodata', function () {
    return '<h2>Nama: Arizal Muhamad Ridwan</h2><br><h2>NIM: 0110123202</h2><br><h2>Rombel: SI05</h2>';
});

Route::get('/profil', function () {
    return view('profil',[
        "nama" => "Arizal Muhamad Ridwan",
        "umur" => 20,
        "email" => "Arizal@sample.com",
        "kampus" => "STT terpadu Nurul Fikri",
        "alamat" => "Bogor"

    ]);
});


Route::get('/admin', [AdminController::class,'index']);