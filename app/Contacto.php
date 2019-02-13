<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    protected $table = 'contacto';
    protected $primaryKey='idContacto';
    protected $fillable = [
        'nameCont', 'lastNameCont', 'email', 'telefono', 'provincia_id', 'prioridad_id','anotacion_id','user_id','token'
    ];
    
}
