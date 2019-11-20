<?php

namespace App\Http\Controllers;

use App\Condominio;
use App\Http\Requests\UnidadeRequest;
use App\Unidade;
use Illuminate\Http\Request;

class UnidadeController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function listar(){
        $unidades = Unidade::all();
        return view('unidade.listar', ['unidades' => Unidade::all()], compact('unidades'));
    }
    
    public function criar(){
        $unidade = new Unidade();
        $condominios = Condominio::all();
        return view('unidade.criar', compact('unidade', 'condominios'));
    }
    
    public function editar($id){

        $unidade = Unidade::find($id);
        $condominios = Condominio::all();
        return view('unidade.criar', compact('unidade', 'condominios'));
    }
    
    public function remover($id){
        $unidade = Unidade::find($id);
        $unidade->delete();
        return redirect('unidade/listar');
    }
    
    public function salvar(UnidadeRequest $request){

        if($request->id){
            $unidade = Unidade::find($request->id);
            $unidade->fill($request->all());
        }else{
            $unidade = new Unidade($request->all());
        }
        
        $unidade->numero_unidade = $request->numero_unidade;
        $unidade->proprietario = $request->proprietario;
        $unidade->cpf = $request->cpf;
        $unidade->email = $request->email;
        $unidade->telefone = $request->telefone;
        $unidade->condominio_id = $request->condominio_id;
        $unidade->save();


        return redirect('unidade/listar');
    }
}
