<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $table = 'evento';
    protected $primaryKey='idEvento';
    protected $fillable = [
        'nombreEvento', 'fechaEvento', 'horaEvento', 'detalleEvento','token','user_id', 'contacto_id'
    ];

    public function userId()
    {
        return $this->belongsTo('App\User');
    }

}
