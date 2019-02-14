@extends('layouts.app')

@section('content')

<table id="tableEventos" class='table table-sm table-hover table-responsive monserrat' data-route="{{Route('dataTable.Eventos')}}">
                        <thead class="thead-dark">
                            <tr>
                                <th>Nombre Evento</th>
                                <th>Fecha Evento</th>
                                <th>Hora Evento</th>
                                <th>Detalle Evento</th>
                            </tr>
                        </thead>
                        <tbody id="tbodyEventos">
                        </tbody>
                    </table>
@endsection