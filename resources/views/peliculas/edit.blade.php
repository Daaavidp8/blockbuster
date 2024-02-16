@extends('plantilla')
@section('titulo','Pagina de Modificación')
@section('contenido')
    <h1>Modificando {{$pelicula->title}}</h1>
    <form action="{{ route('peliculas.update',$pelicula->id) }}" method="get">
        @csrf
        @method('GET')
        <div class="form-group">
            <label for="title">Titulo</label>
            <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp" value="{{ $pelicula->title }}">
        </div>
        <div class="form-group">
            <label for="year">Año</label>
            <input type="number" class="form-control" id="year" name="year" aria-describedby="emailHelp" value="{{ $pelicula->year }}">
        </div>
        <div class="form-group">
            <label for="director">Director</label>
            <input type="text" class="form-control" id="director" name="director" aria-describedby="emailHelp" value="{{ $pelicula->director }}">
        </div>
        <div class="form-group">
            <label for="titulo">Poster</label>
            <input type="text" class="form-control" id="poster" name="poster" aria-describedby="emailHelp" value="{{ $pelicula->poster }}">
        </div>
        <div class="form-group">
            <label for="synopsis">Synopsis</label>
            <input type="text" class="form-control" id="synopsis" name="synopsis" aria-describedby="emailHelp" value="{{$pelicula->synopsis}}">
        </div>
        <input type="hidden" value="0" name="rented">
        <div class="d-flex mt-3">
            <button type="submit" class="btn btn-primary mr-3">Guardar Cambios</button>
            <form action="{{ route('peliculas.destroy',$pelicula->id) }}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" value="Borrar" class="btn btn-danger">
            </form>
        </div>
    </form>

@endsection
