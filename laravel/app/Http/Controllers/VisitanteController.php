<?php

namespace App\Http\Controllers;

use App\Condominio;
use App\Unidade;
use App\Visitante;
use Illuminate\Http\Request;

class VisitanteController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function listar(){

        $visitantes = Unidade::all();
        return view('visitante.listar', ['visitantes' => Visitante::all()], compact('visitantes'));
    }
    
    public function criar(){
        $visitante = new Visitante();
        $condominios = Condominio::all();
        $unidades = Unidade::all();

        return view('visitante.criar', compact('visitante', 'condominios', 'unidades'));
    }
    
    public function editar($id){
        $visitante = Visitante::find($id);
        $condominios = Condominio::all();
        $unidades = Unidade::all();
        return view('visitante.criar', compact('visitante', 'condominios', 'unidades'));
    }
    
    public function remover($id){
        $visitante = Visitante::find($id);
        $visitante->delete();
        return redirect('visitante/listar');
    }
    
    public function salvar(Request $request){
        
        if($request->id){
            $visitante = Visitante::find($request->id);
        }else{
            $visitante = new Visitante($request->all());
        }
        
        $visitante->condominio_id = $request->condominio_id;
        $visitante->unidade_id = $request->unidade_id;
        $visitante->nome = $request->nome;
        $visitante->rg = $request->rg;
        $visitante->data_entrada = $request->data_entrada;
        $visitante->save();
        
        return redirect('visitante/listar');
    }
}
