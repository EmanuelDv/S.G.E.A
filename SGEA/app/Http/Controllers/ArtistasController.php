<?php

namespace App\Http\Controllers;

use App\Models\Artistas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArtistasController extends Controller
{
    public function index()
    {
        $artistas = DB::table('artistas')
         ->join('obras_de_arte', 'artistas.id', '=', 'obras_de_arte.id')
         ->select('artistas.*', 'obras_de_arte.artista_id')
         ->get();

        $artistas = Artistas::all();
        return view('artistas.index', ['artistas' => $artistas]);
    }

    public function create()
    {
        $exposiciones = DB::table('exposiciones')
        ->orderBy('obra_id') 
        ->get();
    return view('artistas.new', ['exposiciones' => $exposiciones]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $artista = new Artistas();
        $artista->nombre = $request->nombre; 
        $artista->id = $request->code; 
        $artista->apellido = $request->apellido;
        $artista->nacionalidad = $request->nacionalidad;
        $artista->biografia = $request->biografia;
        $artista->save();;

        $artistas = DB::table('artistas')
         ->join('obras_de_arte', 'artistas.id', '=', 'obras_de_arte.id')
         ->select('artistas.*', 'obras_de_arte.artista_id')
         ->get();
        $artistas = Artistas::all();
         return view('artistas.index', ['artistas' => $artistas]);
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
        $artista = Artistas::find($id);
        $exposiciones = DB::table('exposiciones')
        ->orderBy('obra_id') 
        ->get();
    return view('artistas.edit', ['artistas' => $artista,'exposiciones =>$exposiciones']);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $artista = Artistas::find($id);
        
        $artista->nombre = $request->nombre; 
        if ($request->code !== null) {
            $artista->id = $request->code;
        } //para evitar error de nulos
        $artista->apellido = $request->apellido;
        $artista->nacionalidad = $request->nacionalidad;
        $artista->biografia = $request->biografia;
        $artista->save();;

        $artistas = DB::table('artistas')
         ->join('obras_de_arte', 'artistas.id', '=', 'obras_de_arte.id')
         ->select('artistas.*', 'obras_de_arte.artista_id')
         ->get();
        $artistas = Artistas::all();
         return view('artistas.index', ['artistas' => $artistas]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $artista = Artistas::find($id);
         $artista->delete();

          $artistas = DB::table('artistas')
          ->join('obras_de_arte', 'artistas.id', '=', 'obras_de_arte.id')
          ->select('artistas.*', 'obras_de_arte.artista_id')
          ->get();

          $artistas = Artistas::all();
       return view('artistas.index', ['artistas' => $artistas]);

    }
}
