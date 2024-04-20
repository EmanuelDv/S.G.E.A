<?php

namespace App\Http\Controllers;

use App\Models\ObrasdeArte;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ObrasdeArteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $obrasDeArte = DB::table('obras_de_arte')
    ->join('exposiciones', 'obras_de_arte.id', '=', 'exposiciones.id')
    ->select('obras_de_arte.*', 'exposiciones.obra_id')
    ->get();
        return view('obras.index', ['obras'=>$obrasDeArte]);

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
