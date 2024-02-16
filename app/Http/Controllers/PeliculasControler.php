<?php

namespace App\Http\Controllers;

use App\Models\Pelicula;
use Illuminate\Http\Request;

class PeliculasControler extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peliculas = Pelicula::paginate(5);
        return view('peliculas.index',compact('peliculas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('peliculas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Pelicula::create($request->all());
        return redirect()->route('peliculas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pelicula = Pelicula::find($id);
        return view('peliculas.edit',compact('pelicula'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $peliculaAModificar = Pelicula::findOrFail($id);
        $peliculaAModificar->title= $request->get('title');
        $peliculaAModificar->year= $request->get('year');
        $peliculaAModificar->director= $request->get('director');
        $peliculaAModificar->poster= $request->get('poster');
        $peliculaAModificar->synopsis= $request->get('synopsis');
        $peliculaAModificar->save();
        return redirect()->route('peliculas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Pelicula::find($id)->delete();
        return redirect()->route('peliculas.index');
    }

    public function filtro(Request $request){
        $autor = Pelicula::find($request->get('pelicula'));
        $peliculas = Pelicula::where('director', '=', $autor)->get();
        dd($peliculas);

    }
}
