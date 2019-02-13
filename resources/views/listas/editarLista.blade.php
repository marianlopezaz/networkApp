@extends('layouts.app')

@section('content')
<h1>Editando Lista {{$Lista->nombreLista}}</h1>

<form method=POST id="editList" action="/Listas/editar/{{$Lista->idLista}}">
{{method_field('PUT')}}
{{csrf_field()}}
<input type="hidden" value="{{Auth::user()->idUsuario}}" name="user_id">
<label>Nombre <input type="text" name="nombreLista" value="{{$Lista->nombreLista}}"> </label> <br>

<button type="submit">Editar</button>
</form>

<a href="{{route('lista.index')}}">Volver</a>

@endsection