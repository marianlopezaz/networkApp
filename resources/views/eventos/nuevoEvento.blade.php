@extends('layouts.app')

@section('content')

@if ($errors->any())
<div class="alert alert-damage">
    <ul>
    @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
    </ul>
</div>
@endif

<form method="POST" action="/Eventos" id="newEvent">
{{csrf_field()}}
<input type="hidden" value="{{Auth::user()->idUsuario}}" name="user_id">
<label>Nombre del Evento <input type="text" name="nombreEvento"> </label> <br>
<label>Fecha del Evento <input type="date" name="fechaEvento"> </label> <br>
<label>Hora del Evento <input type="time" name="horaEvento"> </label> <br>
<label>Descripcion
<textarea name="detalleEvento" form="newEvent" placeholder="Agrega una descripcion"></textarea>
</label><br>
<button type="submit">Crear</button>
</form>

@endsection