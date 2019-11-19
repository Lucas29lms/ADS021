@extends('layouts.padrao')

@section('conteudo')
    <h1>Cadastre seu Curso</h1>

    <form enctype="multipart/form-data" action="/visitante/store" method="post">
        @csrf
        <input type="hidden" id="id" name="id" value="{{$curso->id}}">

        <div class="row">
            <div class="col-md-4">
                <div><h1>Curso</h1></div>
                <div class="form-group row">
                    <label for="nome" class="col-sm-2 col-form-label">Nome: </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nome" name="nome" value="{{$curso->nome}}">
                        <span id="mensagemNome" style="color: red"></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="codigo" class="col-sm-2 col-form-label">Código: </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="codigo" name="codigo" {{$curso->codigo}}>
                        <span id="mensagemCodigo" style="color: red"></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="duracao" class="col-sm-2 col-form-label">Duração: </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="duracao" name="duracao" value="{{$curso->duracao}}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="arquivo" class="col-sm-2 col-form-label">Arquivo: </label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" id="arquivo" name="arquivo" value="{{$curso->duracao}}">
                    </div>
                </div>
                @if($curso->arquivo)
                    <div>
                        <img width="100px" src="{{url('storage/' . $curso->arquivo)}}">
                    </div>
                @endif
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                        <a href="/index" class="btn btn-danger">Voltar</a>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div><h1>Disciplina</h1></div>
                <div class="form-group row">
                    <table class="table table-striped table-hover table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">Ações</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Curso</th>
                        </tr>
                        <tbody>
                        @foreach($curso->disciplinas as $disciplina)
                            <tr>
                                <td>
                                    <a href="/disciplina/excluir/{{$disciplina->id}}">Excluir</a>
                                    <a href="/disciplina/alterar/{{$disciplina->id}}">Alterar</a>
                                </td>
                                <td>{{$disciplina->nome}}</td>
                                <td>{{$disciplina->curso->nome}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </form>

@endsection

@section('js')

    <script>
        $(function () {
            $('#nome').change(function () {

                $.ajax({
                    url: '/curso/verificar-nome/' + $('#nome').val(),
                    success: function (existe) {
                        if (existe > 0) {
                            $('#mensagemNome').html('O curso já existe!');
                            $('#nome').val('').focus();
                        } else {
                            $('#mensagemNome').html('');
                        }
                    }
                });

            });

            $('#codigo').change(function () {

                $.ajax({
                    url: '/curso/verificar-codigo/' + $('#codigo').val(),
                    success: function (existe) {
                        if (existe > 0) {
                            $('#mensagemCodigo').html('O codigo já existe!');
                            $('#codigo').val('').focus();
                        } else {
                            $('#mensagemCodigo').html('');
                        }
                    }
                });

            });
        })
    </script>
@endsection
