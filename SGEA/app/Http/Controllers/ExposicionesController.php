<?php

namespace App\Http\Controllers;

use App\Models\Exposiciones;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExposicionesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $exposiciones = DB::table('exposiciones')
        ->join('obras_de_arte', 'exposiciones.obra_id', '=', 'obras_de_arte.id')
        ->select('exposiciones.*', 'obras_de_arte.titulo')
        ->get();

    return view('exposiciones.index', ['exposiciones' => $exposiciones]);
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
