<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacto_Lista extends Model
{
    protected $table = 'contacto_lista';
    protected $primaryKey='idCL';
    protected $fillable = [
        'contacto_id', 'lista_id', 
    ];
}
