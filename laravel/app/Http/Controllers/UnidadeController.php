<?php

namespace App\Http\Controllers;

use App\Unidade;
use Illuminate\Http\Request;

class UnidadeController extends Controller
{
    public function listar(){
        return Unidade::all();
    }
    
    public function criar(){
        
    }
    
    public function editar($id){
        return Unidade::find($id);
    }
    
    public function remover($id){
        $unidade = Unidade::find($id);
        $unidade->delete();
        return redirect('unidade/listar');
    }
    
    public function salvar(Request $request){
        $unidade = new Condominio();
        
        if($request->has('id')){
            $unidade = Condominio::find($id);
        }
        
        $unidade->numero_unidade = $request->numero_unidade;
        $unidade->proprietario = $request->proprietario;
        $unidade->cpf = $request->cpf;
        $unidade->email = $request->email;
        $unidade->telefone = $request->telefone;
        $unidade->save();


        return redirect('unidade/listar');
    }
}
