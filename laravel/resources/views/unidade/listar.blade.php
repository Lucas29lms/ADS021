@extends('layouts.app')

@section('conteudo')

<div class="container">
    <div><h1>Unidades</h1></div>
    <br>
    <table class="table table-striped table-hover table-bordered">
        <thead>
        <tr>
            <th scope="col">Ações</th>
            <th scope="col">Unidade</th>
            <th scope="col">Proprietário</th>
            <th scope="col">CPF</th>
            <th scope="col">Email</th>
            <th scope="col">Telefone</th>
        </tr>
        <tbody>
            @foreach($unidades as $unidade)
                <tr>
                    <td>
                        <a href="/unidade/{{$unidade->id}}/remover">Excluir</a>
                        <a href="/unidade/{{$unidade->id}}/editar">Alterar</a>
                    </td>
                    <td>{{$unidade->numero_unidade}}</td>
                    <td>{{$unidade->proprietario}}</td>
                    <td>{{$unidade->cpf}}</td>
                    <td>{{$unidade->email}}</td>
                    <td>{{$unidade->telefone}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="/unidade/criar" class="btn btn-primary">Novo</a>
</div>
@endsection

