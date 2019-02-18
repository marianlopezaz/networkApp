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
      <form id="formNuevoContacto"  data-toggle="validator" role="form"> 
          <div class="form-group">
            {{csrf_field()}}
            <input type="hidden" value="{{Auth::user()->idUsuario}}" name="user_id">
            <label>Nombre<input type="text" id="nombreContacto" name="nombreContacto" class="form-control" > </label> <br>
            <label>Apellido<input type="text" id="apellidoContacto" name="apellidoContacto" class="form-control" > </label> <br>
            <label>Email<input type="email" id="emailContacto" name="emailContacto" class="form-control" > </label> <br>
            <label>Telefono<input type="number" id="telefonoContacto" name="telefonoContacto" class="form-control" > </label> <br>
            <label>Pais <select type="text" name="paisContacto" id="paisContacto" class="form-control">
             <option selected="true">Elige un Pais</option>
              @foreach ($paises as $pais)
              <option value={{$pais->idPais}}>{{$pais->nombrePais}}</option>
              @endforeach
            </select> </label> <br>

            <label>Provincia <select  disabled="disabled" type="text" name="provinciaContacto" id="provinciaContacto" class="form-control">
            <option selected="true">Elige una Provincia</option>
            </select> </label> <br>
            <label>Anotacion<input type="text" id="anotacionContacto" name="anotacionContacto" class="form-control" > </label> <br>
            
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" 
           class="btn btn-default" 
           data-dismiss="modal">Cerrar</button>
        <span class="pull-right">
          <button type="submit" id="agregarNuevoContacto" class="btn btn-primary">
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
    <script src="{{ asset('js/jsFiles/contactoData.js') }}"></script>
@endsection