<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Contacto;
use App\Pais;
use App\Provincia;
use App\Prioridad;
use App\Anotacion;
use Illuminate\Http\Request;

class MisContactosController extends Controller
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
       $title = 'Mis Contactos';
       $contactos = Contacto::where('user_id','=',Auth::user()->idUsuario)->get();
       
       return view('contactos.misContactos',compact('title','contactos'));
   }
 

   public function edicionContacto(Contacto $Contacto)
   {    
       $title = "Editar Contacto";
       return view('contactos.editarContacto',compact('title','Contacto'));
   }
   
   public function DetalleContactos(Contacto $Contacto)
   {    
       $title = "Detalle Contacto";
       return view('contactos.detalleContacto',compact('title','Contacto'));
   }

   public function nuevoContacto(){
    $title = 'Nuevo Contacto';
    $paises= Pais::all();
    $provincias= Provincia::all();
    $prioridades= Prioridad::all();
    return view('contactos.nuevoContacto',compact('title','paises','provincias','prioridades'));

}

public function verEventoContacto(Contacto $Contacto)
{    
   $title = "Eventos de: ".$Contacto->nameCont; 
   $eventos = $Contacto->evento_id;
   return view('contactos.eventosContacto',compact('title','eventos'));
}
   

    //FUNCIONES QUE MODIFICAN O AGREGAN REGISTROS EN LA DB



   public function EliminarContacto(Contacto $Contacto)
   {
       $Contacto->delete();

       return redirect()->route('contacto.index');
   }


   public function EditarContacto(Contacto $Contacto)
   {    
    $Contacto->update(request()->validate([
            'nameCont'=>'',
            'lastNameCont'=>'',
            'email'=>'',
            'telefono' =>'',
            'provincia'=>'',
            'prioridad'=>'',
            'anotacion'=>'',
            'user_id' =>'required',
            
        ],
        [
            'nameCont.required'=>'El campo nombre es obligatorio',
            'lastNameCont.required'=>'El campo Apellido es obligatorio',
          
         
        ]));

    return redirect()->route('contacto.detalle',['Contacto'=>$Contacto]);
   }
    
    public function crearContacto()
    {
       
        $data = request()->validate([
            'nameCont'=>'',
            'lastNameCont'=>'',
            'email'=>'',
            'telefono' =>'',
            'provincia'=>'',
            'prioridad'=>'',
            'anotacion'=>'',
            'user_id' =>'required',
            
        ],
        [
            'nameCont.required'=>'El campo nombre es obligatorio',
            'lastNameCont.required'=>'El campo Apellido es obligatorio',
          
         
        ]);

            $provincia_id = Provincia::where('nombreProvincia',$data['provincia'])->value('idProvincia');
            $prioridad_id = Prioridad::where('nombrePrioridad',$data['prioridad'])->value('idPrioridad');

            if(isset($data['anotacion'])){
                Anotacion::create([
                    'detalleAnotacion'=>$data['anotacion'],
                    ]);
                    $anotacion_id = Anotacion::where('detalleAnotacion',$data['anotacion'])->value('idAnotacion');
                Contacto::create([
                    'nameCont'=> $data['nameCont'],
                    'lastNameCont'=> $data['lastNameCont'],
                    'email'=> $data['email'],
                    'telefono' => $data['telefono'],
                    'provincia_id'=> $provincia_id,
                    'anotacion_id'=>$anotacion_id,
                    'prioridad_id'=>$prioridad_id,
                    'user_id' => $data['user_id'],
                    ]);
                    return redirect(route('contacto.index'));

            }
            else{
                Contacto::create([
                    'nameCont'=> $data['nameCont'],
                    'lastNameCont'=> $data['lastNameCont'],
                    'email'=> $data['email'],
                    'telefono' => $data['telefono'],
                    'provincia_id'=> $provincia_id,
                    'prioridad_id'=>$prioridad_id,
                    'user_id' => $data['user_id'],
                    ]);
                    return redirect(route('contacto.index'));
            }
    }

}
