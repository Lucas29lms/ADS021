@extends('layouts.app')

@section('conteudo')

    <div class="panel-body">
        @if ($errors->any())
            <ul class="alert alert-warning">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
        <div class="container">
            <h1>Cadastre o Condominio</h1>
            <form action="/condominio/salvar" method="post">
                {{csrf_field()}}
                <input type="hidden" id="id" name="id" value="{{$condominio->id}}">

                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="nome" class="col-sm-2 col-form-label">Nome: </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="nome" name="nome" value="{{$condominio->nome}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cnpj" class="col-sm-2 col-form-label">CNPJ: </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="cnpj" name="cnpj" value="{{$condominio->cnpj}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="endereco" class="col-sm-2 col-form-label">Endereço: </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="endereco" name="endereco"
                                   value="{{$condominio->endereco}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cep" class="col-sm-2 col-form-label">CEP: </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="cep" name="cep" value="{{$condominio->cep}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="bairro" class="col-sm-2 col-form-label">Bairro: </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="bairro" name="bairro"
                                   value="{{$condominio->bairro}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cidade" class="col-sm-2 col-form-label">Cidade: </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="cidade" name="cidade"
                                   value="{{$condominio->cidade}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="uf" class="col-sm-2 col-form-label">UF: </label>
                        <div class="col-sm-6">
                            <select name="uf" id="uf" class="form-control">
                                <option value="">Selecione</option>
                                @foreach($ufs as $chave=>$uf)
                                    <option value="{{$chave}}">{{$uf}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Salvar</button>
                            <a href="/condominio/listar" class="btn btn-danger">Voltar</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

