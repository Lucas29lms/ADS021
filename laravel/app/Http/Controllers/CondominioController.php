<?php

namespace App\Http\Controllers;

use App\Condominio;
use Illuminate\Http\Request;

class CondominioController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function listar(){
        $condominios = Condominio::all();
        return view('condominio.listar', ['condominios' => Condominio::all()], compact('condominios'));
    }
    
    public function criar(){
        $condominio = new Condominio();
        return view('condominio.criar', compact('condominio'));
    }
    
    public function editar($id){
        $condominio = Condominio::find($id);

        return view('condominio.criar', compact('condominio'));
    }
    
    public function remover($id){
        $condominio = Condominio::find($id);
        $condominio->delete();
        return redirect('condominio/listar');
    }
    
    public function salvar(Request $request){

        if($request->id){
            $condominio = Condominio::find($request->id);
        }else{
            $condominio = new Condominio($request->all());
        }
        
        $condominio->nome = $request->nome;
        $condominio->cnpj = $request->cnpj;
        $condominio->endereco = $request->endereco;
        $condominio->cep = $request->cep;
        $condominio->bairro = $request->bairro;
        $condominio->cidade = $request->cidade;
        $condominio->uf = $request->uf;
        $condominio->save();

        return redirect('condominio/listar');
    }
}
