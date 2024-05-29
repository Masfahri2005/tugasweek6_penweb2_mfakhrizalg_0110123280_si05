<?php

namespace App\Http\Controllers;

use App\Models\Kelurahan; // panggil file modelsKelurahan
use Illuminate\Http\Request;

class KelurahanController extends Controller
{
    /**
     * Display a listing of the resource.a
     */
    public function index()
    {
        $list_kelurahan = Kelurahan::all();
    // buat turunan model Kelurahan
        return view('kelurahan.index', ['list_kelurahan'=>$list_kelurahan]);
    // kirim array data ke view kelurahan index menggunakan array assosiative
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
