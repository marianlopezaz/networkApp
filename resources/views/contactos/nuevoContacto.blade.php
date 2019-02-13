@extends ('layouts.app')
@section('content')

<center><h1>{{$title}}</h1>
    @if ($errors->any())
        <div class="alert alert-damage">
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="/Contactos" id="newCotact">
        {{csrf_field()}}
        <input type="hidden" value="{{Auth::user()->idUsuario}}" name="user_id">
        <label>Nombre <input type="text" name="nameCont"> </label> <br>
        <label>Apellido<input type="text" name="lastNameCont"> </label> <br>
        <label>Email<input type="email" name="email"> </label> <br>
        <label>Telefono<input type="number" name="telefono"> </label> <br>

        <!--SELECCIONAR PAIS -->
        <label>Pais
        <select onchange="EligioPais()">
            <option disabled selected value>--Seleccione un Pais--</option> 
            @foreach ($paises as $pais)
                    <option>{{$pais->nombrePais}}</option>
                @endforeach
        </select>
        </label>
        <br><br>



        <!--SELECCIONAR PROVINCIA -->
        <label>Provincia
        <select name="provincia">
            <option disabled selected value>--Seleccione una Provincia--</option>  
             @foreach ($provincias as $provincia)
                 <option name="provincia">{{$provincia->nombreProvincia}}</option>
            @endforeach
        </select>
        </label>
        <br><br>
       

         <!--SELECCIONAR PRIORIDAD -->
         <label>Prioridad
        <select name="prioridad">
            <option disabled selected value>--Seleccione una Prioridad--</option>  
             @foreach ($prioridades as $prioridad)
                 <option  name="prioridad">{{$prioridad->nombrePrioridad}}</option>
            @endforeach
        </select>
        <br><br>
    
        </label>
        <br><br>
        <!--NOTAS -->
        <label>Anotacion
        <textarea name="anotacion" placeholder="Agrega una anotacion"></textarea>
        </label>
        <br><br>
        <button type="submit">Crear</button>
    </form>

</center>

<script  src="{{ asset('js/functions.js') }}"></script>
@endsection