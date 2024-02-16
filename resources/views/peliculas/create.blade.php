@extends('plantilla')
@section('titulo','Añadir Pelicula')
@section('contenido')
    <h1>Añadir Pelicula</h1>
    <form action="{{ route('peliculas.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="title">Titulo</label>
            <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp" placeholder="Agrega el titulo de la pelicula">
        </div>
        <div class="form-group">
            <label for="year">Año</label>
            <input type="text" class="form-control" id="year" name="year" aria-describedby="emailHelp" placeholder="Agrega el año de la pelicula">
        </div>
        <div class="form-group">
            <label for="director">Director</label>
            <input type="text" class="form-control" id="director" name="director" aria-describedby="emailHelp" placeholder="Agrega el director de la pelicula">
        </div>
        <div class="form-group">
            <label for="titulo">Poster</label>
            <input type="text" class="form-control" id="poster" name="poster" aria-describedby="emailHelp" placeholder="Agrega el poster de la pelicula">
        </div>
        <div class="form-group">
            <label for="synopsis">Synopsis</label>
            <input type="text" class="form-control" id="synopsis" name="synopsis" aria-describedby="emailHelp" placeholder="Agrega La synopsis de la pelicula">
        </div>
        <input type="hidden" value="0" name="rented">
        <button type="submit" class="btn btn-primary">Subir Pelicula</button>
    </form>
@endsection
