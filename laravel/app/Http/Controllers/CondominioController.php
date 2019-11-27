<?php

namespace App\Http\Controllers;

use App\Condominio;
use App\Http\Requests\CondominioRequest;
use Illuminate\Http\Request;

class CondominioController extends Controller
{
    private $ufs = [
        'AC'=>'Acre',
        'AL'=>'Alagoas',
        'AP'=>'Amapá',
        'AM'=>'Amazonas',
        'BA'=>'Bahia',
        'CE'=>'Ceará',
        'DF'=>'Distrito Federal',
        'ES'=>'Espírito Santo',
        'GO'=>'Goiás',
        'MA'=>'Maranhão',
        'MT'=>'Mato Grosso',
        'MS'=>'Mato Grosso do Sul',
        'MG'=>'Minas Gerais',
        'PA'=>'Pará',
        'PB'=>'Paraíba',
        'PR'=>'Paraná',
        'PE'=>'Pernambuco',
        'PI'=>'Piauí',
        'RJ'=>'Rio de Janeiro',
        'RN'=>'Rio Grande do Norte',
        'RS'=>'Rio Grande do Sul',
        'RO'=>'Rondônia',
        'RR'=>'Roraima',
        'SC'=>'Santa Catarina',
        'SP'=>'São Paulo',
        'SE'=>'Sergipe',
        'TO'=>'Tocantins'
    ];
    
    public function __construct(){
        $this->middleware('auth');
    }

    public function listar(){
        $condominios = Condominio::all();

        return view('condominio.listar', ['condominios' => Condominio::all()], compact('condominios'));
    }
    
    public function criar(){
        $condominio = new Condominio();
        $ufs = $this->ufs;
        return view('condominio.criar', compact('condominio', 'ufs'));
    }
    
    public function editar($id){
        $condominio = Condominio::find($id);
        $ufs = $this->ufs;
        return view('condominio.criar', compact('condominio', 'ufs'));
    }
    
    public function remover($id){
        $condominio = Condominio::find($id);
        $condominio->delete();
        return redirect('condominio/listar');
    }
    
    public function salvar(CondominioRequest $request){

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
