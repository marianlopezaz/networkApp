@extends('layouts.app')

@section('content')
       
            <table id="tableEventos" class="table table-bordered" style="width:100%" data-route="{{Route('datatable.eventos')}}">
                                     <thead class="thead-dark">
                                        <tr>
                                            <th>Nombre del Evento</th>
                                            <th>fecha</th>
                                            <th>hora</th>
                                            <th>detalle</th>
                                        </tr>
                                    </thead>
            </table>

@endsection
@section('script')
    <script src="{{ asset('js/jsFiles/eventoData.js') }}"></script>
@endsection