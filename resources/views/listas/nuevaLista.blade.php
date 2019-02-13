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
<center>
<h1>Nueva Lista</h1>
<form method="POST" action="/Listas" id="newList">
{{csrf_field()}}
<input type="hidden" value="{{Auth::user()->idUsuario}}" name="user_id">
<label>Nombre <input type="text" name="nombreLista"> </label> <br>
<button type="submit">Crear</button>
</form>
</center>
@endsection