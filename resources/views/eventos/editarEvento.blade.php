@extends('layouts.app')

@section('content')
<h1>Editando evento {{$Evento->idEvento}}</h1>

<form method=POST id="newEvent" action="/Eventos/editar/{{$Evento->idEvento}}">
{{method_field('PUT')}}
{{csrf_field()}}
<input type="hidden" value="{{Auth::user()->idUsuario}}" name="user_id">
<label>Nombre del Evento <input type="text" name="nombreEvento" value="{{$Evento->nombreEvento}}"> </label> <br>
<label>Fecha del Evento <input type="date" name="fechaEvento" value="{{$Evento->fechaEvento}}"> </label> <br>
<label>Hora del Evento <input type="time" name="horaEvento" value="{{$Evento->horaEvento}}"> </label> <br>
<label>Descripcion
<textarea name="detalleEvento"  {{$Evento->detalleEvento}}></textarea>
</label><br>
<button type="submit">Editar</button>
</form>

<a href="{{route('evento.index')}}">Volver</a>

@endsection