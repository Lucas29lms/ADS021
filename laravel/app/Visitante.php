<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visitante extends Model{

    public function condominio(){
        return $this->belongsTo('\App\Condominio');
    }
    public function unidades(){
        return $this->belongsTo('\App\Unidade');
    }
}
