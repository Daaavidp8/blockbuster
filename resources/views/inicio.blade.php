@extends('plantilla')
@section('titulo','Pagina de inicio')
@section('contenido')
    <h1>Inicio</h1>
    <form>
        <select name="user" class="form-select">
            @foreach($users as $user)
                <option value="{{$user->id}}">{{$user->name}}</option>
            @endforeach
        </select>
        <a href="{{route('peliculas.index')}}" class="btn btn-success">Continuar</a>
    </form>
@endsection
