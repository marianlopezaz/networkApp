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
        <form id="formNuevoEvento"  data-toggle="validator" role="form"> 
          <div class="form-group">
            {{csrf_field()}}
            <input type="hidden" value="{{Auth::user()->idUsuario}}" name="user_id">
            <label>Nombre del Evento <input type="text" id="nombreEvento" name="nombreEvento" class="form-control" > </label> <br>
            <label>Fecha del Evento <input type="date" id="fechaEvento" name="fechaEvento" class="form-control" > </label> <br>
            <label>Hora del Evento <input type="time" id="horaEvento" name="horaEvento" class="form-control" > </label> <br>
            <label>Descripcion
            <textarea id="detalleEvento" name="detalleEvento" placeholder="Agrega una descripcion" class="form-control" ></textarea>
            </label><br>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" 
           class="btn btn-default" 
           data-dismiss="modal">Cerrar</button>
        <span class="pull-right">
          <button type="submit" id="agregarNuevoEvento" class="btn btn-primary">
            Agregar
          </button>
        </span>
      </div>
      </form>
    </div>
  </div>
</div>
@endsection

@section('script')
    <script src="{{ asset('js/jsFiles/eventoData.js') }}"></script>
@endsection