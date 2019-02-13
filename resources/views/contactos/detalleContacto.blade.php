@extends('layouts.app')

@section('content')
<h1>{{$Contacto->nameCont}}</h1>
   <table border='1'>
      <th>Nombre </th>
      <th>Apellido </th>
      <th>Email </th>
      <th>Telefono </th>

      <tr>
         <td>{{$Contacto->nameCont}}</td>
         <td>{{$Contacto->lastNameCont}}</td>
         <td>{{$Contacto->email}}</td>
         <td>{{$Contacto->telefono}}</td>
      </tr>

   </table>
   <br>
   <a href="{{route('contacto.index')}}">Volver</a>
   <a href="{{route('evento.contacto',[$Contacto])}}">Eventos de {{$Contacto->nameCont}}</a

   @endsection