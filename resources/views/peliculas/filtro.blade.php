@extends('plantilla')
@section('titulo','Listado de Peliculas')
@section('contenido')
    <h1>Filtro Por Director</h1>
    <form action="{{route('resultado_filtro')}}" method="post">
        @csrf
        <label for="pelicula">Elige el Director:</label>
        <select name="pelicula" id="pelicula">
        @foreach($peliculas as $pelicula)
            <option value="{{$pelicula->director}}">{{$pelicula->director}}</option>
        @endforeach
        </select>
        <input type="submit" class="btn btn-primary">
    </form>

    @if(isset($resultados))
        <ul>
            @foreach($resultados as $resultado)
                <li>{{$pelicula->title}}</li>
            @endforeach
        </ul>
    @endif
@endsection

