<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evento;
use Illuminate\Support\Facades\Auth;
use Datatables;
use Illuminate\Support\Facades\Response;
use App\Contacto;

class EventoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    //FUNCIONES QUE SOLO RETORNAN VISTAS

    public function index()
    {
        $title = 'Mis Eventos';
        $contactos = Contacto::where('user_id','=',Auth::user()->idUsuario)->get();
        return view('eventos.evento',compact('title','contactos'));

    }

    public function eventoData(){
      
        $eventos = Evento::where('user_id','=',Auth::user()->idUsuario);
        return Datatables::of($eventos)->make(true);
    }

    public function DetalleEventos(Evento $Evento){
        $title = 'Detalle Evento';
        return view('eventos.detalleEvento',compact('title','Evento'));
 
     }

     

    public function edicionEvento(Evento $Evento){
    
        $title = 'Editar Evento';
        return view('eventos.editarEvento',compact('title','Evento'));

    }


    //FUNCIONES QUE MODIFICAN O AGREGAN REGISTROS EN LA DB

    public function crearEvento()
    {
        $data = request()->validate([
            'contacto_id'=>'',
            'nombreEvento'=>'required',
            'fechaEvento'=>'',
            'horaEvento'=>'',
            'detalleEvento' =>'required',
            'user_id' =>'required',
        ],
        [
            'nombreEvento.required'=>'El campo nombre es obligatorio',
            'detalleEvento.required'=>'El campo Descripcion es obligatorio',
        ]);

        Evento::create([
            'nombreEvento'=> $data['nombreEvento'],
            'fechaEvento'=> $data['fechaEvento'],
            'horaEvento'=> $data['horaEvento'],
            'detalleEvento'=> $data['detalleEvento'],
            'user_id' => $data['user_id'],
            'contacto_id'=>$data['contacto_id'],
             ]);
            return \Response::json();
    }


    
    public function editarEvento(Evento $Evento){
        
        $Evento->update(request()->validate([
            'nombreEvento'=>'required',
            'fechaEvento'=>'',
            'horaEvento'=>'',
            'detalleEvento' =>'required',
        ],
        [
            'nombreEvento.required'=>'El campo nombre es obligatorio',
            'detalleEvento.required'=>'El campo detalle es obligatorio',
            
        ]));

        return redirect()->route('evento.detalle',['Evento'=>$Evento]);

    }

    public function EliminarEventos(Evento $Evento)
    {
        $Evento->delete();

        return redirect()->route('evento.index');
    }


    public function searchContact(Request $req)
    {
       if($req->ajax())
       {
           $output = '';
          $contactos = Contacto::where('nameCont', 'LIKE', '%'.$req->searchContact.'%','and','user_id','=',Auth::user()->idUsuario)->get();

          if($contactos)
          {
               foreach ($contactos as $contacto)
               {
                $output.='<tr>'.
                '<td>'.$contacto->nameCont.'</td>'.
                '<td>'.$contacto->lastNameCont.'</td>'.
                '</tr>';
               }
          }


           return Response($output);
       }
    }

  
}
