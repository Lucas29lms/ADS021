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
            <h1>Cadastre o Visitante</h1>
            <form action="/visitante/salvar" method="post">
                {{csrf_field()}}
                <input type="hidden" id="id" name="id" value="{{$visitante->id}}">

                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="nome" class="col-sm-2 col-form-label">Nome: </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="nome" name="nome" value="{{$visitante->nome}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="rg" class="col-sm-2 col-form-label">RG: </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="rg" name="rg" value="{{$visitante->rg}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="data_entrada" class="col-sm-2 col-form-label">Data da Entrada: </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="data_entrada" name="data_entrada"
                                   value="{{$visitante->data_entrada}}">
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
                        <label for="unidade_id" class="col-sm-2 col-form-label">Unidade: </label>
                        <div class="col-sm-6">
                            <select name="unidade_id" id="unidade_id" class="form-control">
                                <option value="">Selecione</option>
                                @foreach($unidades as $unidade)
                                    <option value="{{$unidade->id}}">{{$unidade->numero_unidade}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Salvar</button>
                            <a href="/visitante/listar" class="btn btn-danger">Voltar</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $('#condominio_id').change(function () {

            var idCondominio = $(this).val();

            $.get('/visitante/obterUnidades/' + idCondominio, function (unidades) {

                $('#unidade_id').empty();

                $.each(unidades, function (key, value) {

                    $('#unidade_id').append('<option value = ' + value.id + ' > ' + value.numero_unidade + ' </option>');

                });

            });

        });
    </script>
@endsection
