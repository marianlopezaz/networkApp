@extends('layouts.app')

@section('content')

<h1>Contactos de la Lista {{$Lista->nombreLista}}</h1>

   <a href="{{route('lista.index')}}">Volver</a>

@endsection