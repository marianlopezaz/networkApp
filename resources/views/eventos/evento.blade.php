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

    <center>
        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#nuevoEventoModal">
        Nuevo Evento
        </button>
    </center>

<!--MODAL DE NUEVO EVENTO    -->
<div class="modal fade" id="nuevoEventoModal" 
     tabindex="-1" role="dialog" 
     aria-labelledby="nuevoEventoModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" 
        id="nuevoEventoModalLabel">Nuevo Evento</h4>
      </div>
      <div class="modal-body">
       
      </div>
      <div class="modal-footer">
        <button type="button" 
           class="btn btn-default" 
           data-dismiss="modal">Cerrar</button>
        <span class="pull-right">
          <button type="button" class="btn btn-primary">
            Agregar
          </button>
        </span>
      </div>
    </div>
  </div>
</div>
@endsection

@section('script')
    <script src="{{ asset('js/jsFiles/eventoData.js') }}"></script>
@endsection