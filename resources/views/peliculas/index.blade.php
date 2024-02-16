@extends('plantilla')
@section('titulo','Listado de Peliculas')
@section('contenido')
    <h1>Listado de Peliculas</h1>
    <a href="{{route('peliculas.create')}}" class="btn btn-success mb-2">Añadir Pelicula</a>
    <div class="d-flex justify-content-around flex-lg-wrap">
    @forelse($peliculas as $pelicula)
        <div class="card mb-5" style="wsuccessAñadir Peliculaidth: 25rem;">
            <img class="card-img-top" src="{{$pelicula->poster}}" alt="Card image cap">
            <div class="card-body">
                <h2 class="card-title">{{ $pelicula->title }}</h2>
                <h4 class="card-title">{{ $pelicula->director }}</h4>
                <h5 class="card-title">{{ $pelicula->year }}</h5>

                <a href="{{route('peliculas.edit',$pelicula->id)}}" class="btn btn-primary">Editar</a>
            </div>
        </div>
    @empty
        <p>No se encontraron datos</p>
    @endforelse
    </div>

    {{ $peliculas->links() }}
@endsection
