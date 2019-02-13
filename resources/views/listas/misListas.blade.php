@extends ('layouts.app')
@section('content')


<center><h1>{{$title}}</h1>
<table colspan="3"  border='1'>
@forelse ($Listas as $lista)

<tr>
    <td>{{$lista->nombreLista}} </td> 
    <td><a href="{{route('lista.detalle',[$lista->idLista])}}">Detalles</a></td>
    <td><a href="{{route('lista.editar.pagina',[$lista->idLista])}}">Editar</a></td>
    <td> <form action ="{{route('lista.destroy',[$lista])}}" method="POST">{{method_field('DELETE')}}
{{csrf_field()}} <input type="submit" class="btn btn-link" value="Eliminar"> </form></td>

</tr>

@empty
    <li>No hay Listas para mostrar, crea una!.</li>

@endforelse
</table>
<table>
    <tr>
        <td>
        <td>
            <form method="GET" action="/Listas/nueva">
            <button type="submit" class="btn btn link">Nueva Lista</button>
            </form>
        </td>
    </tr>
</table>
<table>
</center>
@endsection
