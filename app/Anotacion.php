<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anotacion extends Model
{
    protected $table = 'anotacion';
    protected $primaryKey='idAnotacion';
    protected $fillable = [
        'detalleAnotacion','token',
    ];
}
