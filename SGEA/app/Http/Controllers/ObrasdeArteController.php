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
        $obras = DB::table('obras_de_arte')
    ->join('artistas', 'obras_de_arte.artista_id', '=', 'artistas.id')
    ->select('obras_de_arte.*', 'artistas.nombre')
    ->get();
        return view('obras.index', ['obras'=>$obras]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $artistas = DB::table('artistas')
        ->orderBy('id') 
        ->get();
        
        $obras = ObrasdeArte::all();
    return view('obras.new', ['artistas' => $artistas]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $obra = new ObrasdeArte();
        $obra->artista_id = $request->code;
        $obra->titulo = $request->titulo;
        $obra->ano =$request->ano; // Extrae solo el año de la fecha
        $obra->tecnica = $request->tecnica;
        $obra->dimensiones = $request->dimensiones;
        $obra->descripcion = $request->descripcion;
        $obra->save();

        $obras = DB::table('obras_de_arte')
        ->join('artistas', 'obras_de_arte.artista_id', '=', 'artistas.id')
        ->select('obras_de_arte.*', 'artistas.nombre')
        ->get();
            return view('obras.index', ['obras'=>$obras]);
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
        $obra = ObrasdeArte::find($id);
        $artistas = DB::table('artistas')
        ->orderBy('id') 
        ->get();
    return view('obras.edit', ['obras' => $obra,'artistas' =>$artistas]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $obra = ObrasdeArte::find($id);

        if ($request->code !== null) {
            $obra->id = $request->code;
        }
        $obra->artista_id = $request->code; 
        $obra->titulo = $request->titulo; 
        $obra->ano = $request->ano; 
        $obra->tecnica = $request->tecnica; 
        $obra->dimensiones = $request->dimensiones; 
        $obra->descripcion = $request->descripcion; 
        $obra->save();;

        $obras = DB::table('obras_de_arte')
        ->join('artistas', 'obras_de_arte.artista_id', '=', 'artistas.id')
        ->select('obras_de_arte.*', 'artistas.nombre')
        ->get();
            return view('obras.index', ['obras'=>$obras]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $obra = ObrasdeArte::find($id);
        $obra->delete();

        $obras = DB::table('obras_de_arte')
        ->join('artistas', 'obras_de_arte.artista_id', '=', 'artistas.id')
        ->select('obras_de_arte.*', 'artistas.nombre')
        ->get();
            return view('obras.index', ['obras'=>$obras]);

    }
}
