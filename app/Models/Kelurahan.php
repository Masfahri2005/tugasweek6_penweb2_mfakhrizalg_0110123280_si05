<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    use HasFactory;
    
    public $timestamp = false;
    protected $table ='kelurahan';
    // table adalah property laravel yang didalamnya terkoneksi dengan
    // nama table yang mau kita tampilkan datanya,
    // tetapi hanya dapat di akses di dalam class model tersebut ataupun turunan nya

    protected $filiable = ['id','nama','kec_id'];
    // filiable adalah variable dalam model eloquent yang tugasnya
    // membatasi kolom mana yang dapat di isi atau di input
}
