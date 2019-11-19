<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Condominio extends Model
{
    protected $fillable = ['nome', 'cnpj', 'endereco', 'cep', 'bairro', 'cidade', 'uf'];

    public function unidade(){
        return $this->hasMany('\App\Unidade');
    }
    public function visitantes(){
        return $this->hasMany('\App\Visitante');
    }
}
