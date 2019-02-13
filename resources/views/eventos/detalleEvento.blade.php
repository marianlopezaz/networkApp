@extends('layouts.app')

@section('content')

<h1>Detalle del Evento {{$Evento->idEvento}}</h1>

   <a href="{{route('evento.index')}}">Volver</a>

@endsection