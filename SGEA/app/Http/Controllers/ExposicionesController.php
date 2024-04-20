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
        
        $exposiciones = Exposiciones::all();

    return view('exposiciones.index', ['exposiciones' => $exposiciones]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $obras = DB::table('obras_de_arte')
        ->orderBy('artista_id') 
        ->get();
        
        $exposiciones = Exposiciones::all();
    return view('exposiciones.new', ['obras' => $obras]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $exposicion = new Exposiciones();
        $exposicion->id = $request->code; 
        $exposicion->obra_id = $request->obra_id; 
        $exposicion->fecha_inicio = $request->fecha_inicio; 
        $exposicion->fecha_fin = $request->fecha_fin; 
        $exposicion->ubicacion = $request->ubicacion; 
        $exposicion->nombre_evento = $request->nombre_evento; 
        $exposicion->save();;

        $exposiciones = DB::table('exposiciones')
        ->join('obras_de_arte', 'exposiciones.obra_id', '=', 'obras_de_arte.id')
        ->select('exposiciones.*', 'obras_de_arte.titulo')
        ->get();
        $exposiciones = Exposiciones::all();
         return view('exposiciones.index', ['exposiciones' => $exposiciones]);
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
        $exposicion = Exposiciones::find($id);
        $obras = DB::table('obras_de_arte')
        ->orderBy('artista_id') 
        ->get();
    return view('exposiciones.edit', ['exposiciones' => $exposicion,'obras =>$obras']);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $exposicion = Exposiciones::find($id);

        if ($request->code !== null) {
            $exposicion->id = $request->code;
        }
        $exposicion->obra_id = $request->obra_id; 
        $exposicion->fecha_inicio = $request->fecha_inicio; 
        $exposicion->fecha_fin = $request->fecha_fin; 
        $exposicion->ubicacion = $request->ubicacion; 
        $exposicion->nombre_evento = $request->nombre_evento; 
        $exposicion->save();;

        $exposiciones = DB::table('exposiciones')
         ->join('obras_de_arte', 'exposiciones.obra_id', '=', 'obras_de_arte.id')
         ->select('exposiciones.*', 'obras_de_arte.titulo')
         ->get();
          $exposiciones = Exposiciones::all();
         return view('exposiciones.index', ['exposiciones' => $exposiciones]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $exposicion = Exposiciones::find($id);
         $exposicion->delete();

          $exposiciones = DB::table('exposiciones')
          ->join('obras_de_arte', 'exposiciones.id', '=', 'obras_de_arte.id')
          ->select('exposiciones.*', 'obras_de_arte.artista_id')
          ->get();

          $exposiciones = Exposiciones::all();
       return view('exposiciones.index', ['exposiciones' => $exposiciones]);

    }
}
