@extends ('layouts.app')
@section('content')

<center><h1>{{$title}}</h1>

<table colspan="3" border='1'>

@forelse ($contactos as $contacto)
    <tr>
        <td>{{$contacto->nameCont}} {{$contacto->lastNameCont}}</td>
        <td><a href="{{route('contacto.detalle',[$contacto->idContacto])}}">Detalles</a></td>
        <td><a href="{{route('contacto.editar.pagina',[$contacto->idContacto])}}">Editar</a></td>
        <td> 
            <form action ="{{route('contacto.destroy',[$contacto])}}" method="POST">
            {{method_field('DELETE')}}
            {{csrf_field()}} 
            <input type="submit" class="btn btn-link" value="Eliminar"> 
            </form>
        </td>

    </tr>
    @empty
    <li>No hay contactos para mostrar, agrega uno nuevo!</li>
@endforelse 
</table>
<table>
    <tr>
        <td>
        <td>
            <form method="GET" action="/Contactos/nuevo">
            <button type="submit" class="btn btn link">Nuevo Contacto</button>
            </form>
        </td>
    </tr>
</table>
<table>

</center>

@endsection
