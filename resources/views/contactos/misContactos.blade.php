@extends('layouts.app')

@section('content')

            <table id="tableContactos" class="table table-bordered" style="width:100%" data-route="{{Route('datatable.contactos')}}">
                                     <thead class="thead-dark">
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                        </tr>
                                    </thead>
            </table>
            <center>
        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#nuevoContactoModal">
        Nuevo Contacto
        </button>
    </center>

<!--MODAL DE NUEVO CONTACTO    -->
<div class="modal fade" id="nuevoContactoModal" 
     tabindex="-1" role="dialog" 
     aria-labelledby="nuevoContactoModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" 
        id="nuevoContactoModalLabel">Nuevo Contacto</h4>
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
    <script src="{{ asset('js/jsFiles/contactoData.js') }}"></script>
@endsection