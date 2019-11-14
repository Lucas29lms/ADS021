<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unidade extends Model
{
    protected $fillable = ['numero_unidade', 'proprietario', 'cpf', 'email', 'telefone'];

    public function condominio(){
        return $this->belongsTo('\App\Condominio');
    }

    public function visitante(){
        return $this->hasMany('\App\Visitante');
    }
}
