@extends('layouts.app')

@section('conteudo')

<div class="container">
    <div><h1>Visitantes</h1></div>
    <br>
    <table class="table table-striped table-hover table-bordered">
        <thead>
        <tr>
            <th scope="col">Ações</th>
            <th scope="col">Condominio</th>
            <th scope="col">Unidade</th>
            <th scope="col">Visitante</th>
            <th scope="col">Data</th>
        </tr>
        <tbody>
            @foreach($visitantes as $visitante)
                <tr>
                    <td>
                        <a href="/visitante/{{$visitante->id}}/remover">Excluir</a>
                        <a href="/visitante/{{$visitante->id}}/editar">Alterar</a>
                    </td>
                    <td>{{$visitante->condominio->nome}}</td>
                    <td>{{$visitante->unidade->numero_unidade}}</td>
                    <td>{{$visitante->nome}}</td>
                    <td>{{$visitante->data_entrada}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="/visitante/criar" class="btn btn-primary">Novo</a>
</div>
@endsection

