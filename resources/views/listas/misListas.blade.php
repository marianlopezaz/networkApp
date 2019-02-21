@extends('layouts.app')

@section('content')

            <table id="tableListas" class="table table-bordered" style="width:100%" data-route="{{Route('datatable.listas')}}">
                                     <thead class="thead-dark">
                                        <tr>
                                            <th>Lista De</th>
                                          
                                        </tr>
                                    </thead>
            </table>
            <center>
        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#nuevaListaModal">
        Nueva Lista
        </button>
    </center>

<!--MODAL DE NUEVA LISTA    -->
<div class="modal fade" id="nuevaListaModal" 
     tabindex="-1" role="dialog" 
     aria-labelledby="nuevaListaModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" 
        id="nuevaListaModalLabel">Nueva Lista</h4>
      </div>
      <div class="modal-body">
      <form id="formNuevaLista"  data-toggle="validator" role="form"> 
          <div class="form-group">
            {{csrf_field()}}
            <input type="hidden" value="{{Auth::user()->idUsuario}}" name="user_id">
            <label>Nombre de la Lista <input type="text" id="nombreLista" name="nombreLista" class="form-control" > </label> <br>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" 
           class="btn btn-default" 
           data-dismiss="modal">Cerrar</button>
        <span class="pull-right">
          <button type="submit" id="agregarNuevaLista" class="btn btn-primary">
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
    <script src="{{ asset('js/jsFiles/listaData.js') }}"></script>
@endsection