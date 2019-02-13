<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Lista;

class MisListasController extends Controller
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
       $title = 'Mis Listas';
       $Listas = Lista::where('user_id','=',Auth::user()->idUsuario)->get(); 
       return view('listas.misListas',compact('title','Listas'));
   }

   public function nuevaLista()
   {
       $title = 'Nueva Listas';
       return view('listas.nuevaLista',compact('title'));
   }

   
   public function detalleLista(Lista $Lista){
    $title = 'Detalle Lista';
    return view('listas.detalleLista',compact('title','Lista'));

 }

 

public function edicionLista(Lista $Lista){

    $title = 'Editar Lista';
    return view('listas.editarLista',compact('title','Lista'));

}

//FUNCIONES QUE MODIFICAN O AGREGAN REGISTROS EN LA DB

public function crearLista()
{
    $data = request()->validate([
        'nombreLista'=>'required',
        'user_id' =>'required',
    ]
    );

    Lista::create([
        'nombreLista'=> $data['nombreLista'],
        'user_id' => $data['user_id'],
         ]);
        return redirect(route('lista.index'));
}



public function editarLista(Lista $Lista)
{
    
    $Lista->update(request()->validate
    ([
        'nombreLista'=>'required',
     ]
    ));

    return redirect()->route('lista.detalle',['Lista'=>$Lista]);

}

public function eliminarLista(Lista $Lista)
{
    $Lista->delete();

    return redirect()->route('lista.index');
}

}
