<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prioridad extends Model
{
    protected $table = 'prioridad';
    protected $primaryKey='idPrioridad';
    protected $fillable = [
        'nombrePrioridad','token',
    ];
}
