<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lista extends Model
{
    protected $table = 'lista';
    protected $primaryKey='idLista';
    protected $fillable = [
        'nombreLista','token','user_id',
    ];

    public function userId()
    {
        return $this->belongsTo('App\User');
    }
}
