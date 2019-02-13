<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Evento;
use Illuminate\Support\Facades\Auth;


class DataTableController extends Controller
{
    public function eventosData()
    {
        return Datatables::of(Evento::select(['nombreEvento','fechaEvento','horaEvento','detalleEvento'])->where('user_id','=',Auth::user()->idUsuario)->get())->make(true);
    }
}
