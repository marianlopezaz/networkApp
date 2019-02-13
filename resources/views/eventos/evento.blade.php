@extends('layouts.app')

@section('content')

<center><h1>{{$title}}</h1>
<table colspan="3"  border='1'>
@forelse ($eventos as $evento)

<tr>
    <td>{{$evento->nombreEvento}} </td> 
    <td><a href="{{route('evento.detalle',[$evento->idEvento])}}">Detalles</a></td>
    <td><a href="{{route('evento.editar.pagina',[$evento->idEvento])}}">Editar</a></td>
    <td> <form action ="{{route('evento.destroy',[$evento])}}" method="POST">{{method_field('DELETE')}}
{{csrf_field()}} <input type="submit" class="btn btn-link" value="Eliminar"> </form></td>

</tr>

@empty
    <li>No hay Eventos para mostrar, crea uno!.</li>

@endforelse
</table>
<table>
    <tr>
        <td>
        <td>
            <form method="GET" action="/Eventos/nuevo">
            <button type="submit" class="btn btn link">Nuevo Evento</button>
            </form>
        </td>
    </tr>
</table>
<table>
</center>
@endsection