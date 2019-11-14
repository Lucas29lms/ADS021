<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visitante extends Model{

    protected $fillable = ['condominio_id', 'unidade_id', 'nome', 'rg', 'data_entrada'];

    public function condominio(){
        return $this->belongsTo('\App\Condominio');
    }
    public function unidade(){
        return $this->belongsTo('\App\Unidade');
    }
}
