@extends('layouts.app')

@section('content')
<h1>Editando Contacto {{$Contacto->idContacto}}</h1>

<form method=POST id="editCont" action="/Contactos/editar/{{$Contacto->idContacto}}">
{{method_field('PUT')}}
{{csrf_field()}}
<input type="hidden" value="{{Auth::user()->idUsuario}}" name="user_id">
<label>Nombre <input type="text" name="nameCont" value="{{$Contacto->nameCont}}"> </label> <br>
<label>Apellido <input type="text" name="lastNameCont" value="{{$Contacto->lastNameCont}}"> </label> <br>
<label>Email<input type="email" name="email" value="{{$Contacto->email}}"> </label> <br>

<button type="submit">Editar</button>
</form>

<a href="{{route('contacto.index')}}">Volver</a>


@endsection