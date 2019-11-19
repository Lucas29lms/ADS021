@extends('layouts.app')

@section('conteudo')
    <h1>Cadastre o Unidade</h1>
<div class="panel-body">
    @if ($errors->any())
        <ul class="alert alert-warning">
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
    <form action="/unidade/salvar" method="post">
        {{csrf_field()}}
        <input type="hidden" id="id" name="id" value="{{$unidade->id}}">

        <div class="col-md-6">
            <div class="form-group row">
                <label for="numero_unidade" class="col-sm-2 col-form-label">Unidade: </label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="numero_unidade" name="numero_unidade" value="{{$unidade->numero_unidade}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="proprietario" class="col-sm-2 col-form-label">Proprietário: </label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="proprietario" name="proprietario" value="{{$unidade->proprietario}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="cpf" class="col-sm-2 col-form-label">CPF: </label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="cpf" name="cpf" value="{{$unidade->cpf}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email: </label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="email" name="email" value="{{$unidade->email}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="telefone" class="col-sm-2 col-form-label">Telefone: </label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="telefone" name="telefone" value="{{$unidade->telefone}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="condominio_id" class="col-sm-2 col-form-label">Condominio: </label>
                <div class="col-sm-6">
                    <select name="condominio_id" id="condominio_id" class="form-control">
                        <option value="">Selecione</option>
                        @foreach($condominios as $condominio)
                            <option value="{{$condominio->id}}">{{$condominio->nome}}</option>
                        @endforeach
                    </select>

                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                    <a href="/unidade/listar" class="btn btn-danger">Voltar</a>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection

