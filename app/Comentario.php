<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    protected $fillable = ['id', 'dsComentario', 'cdUsuario'];

    public function users(){
        return $this->belongsTo('App\User');
    }
}
