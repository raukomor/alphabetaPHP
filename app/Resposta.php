<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resposta extends Model
{
    protected $fillable = ['id', 'dsResposta', 'cdComentario', 'cdADM'];

    public function users(){
        return $this->belongsTo('App\User');
    }

    public function comentarios(){
        return $this->belongsTo('App\Comentario');
    }
}
