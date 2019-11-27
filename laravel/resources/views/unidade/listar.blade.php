@extends('layouts.app')

@section('conteudo')

<div class="container">
    <div><h1>Unidades</h1></div>
    <br>
    <table class="table table-striped table-hover table-bordered">
        <thead>
        <tr>
            <th scope="col">Unidade</th>
            <th scope="col">Proprietário</th>
            <th scope="col">CPF</th>
            <th scope="col">Email</th>
            <th scope="col">Telefone</th>
            <th scope="col">Ações</th>
        </tr>
        <tbody>
            @foreach($unidades as $unidade)
                <tr>
                    <td>{{$unidade->numero_unidade}}</td>
                    <td>{{$unidade->proprietario}}</td>
                    <td>{{$unidade->cpf}}</td>
                    <td>{{$unidade->email}}</td>
                    <td>{{$unidade->telefone}}</td>
                    <td>
                        <a href="/unidade/{{$unidade->id}}/remover" class="btn btn-danger">Excluir</a>
                        <a href="/unidade/{{$unidade->id}}/editar" class="btn btn-primary">Alterar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="/unidade/criar" class="btn btn-success">Novo</a>
</div>
@endsection

