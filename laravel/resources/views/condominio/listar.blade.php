@extends('layouts.app')

@section('conteudo')

<div class="container">
    <div><h1>Condominios</h1></div>
    <br>
    <table class="table table-striped table-hover table-bordered">
        <thead>
        <tr>
            <th scope="col">Ações</th>
            <th scope="col">Nome</th>
            <th scope="col">Endereço</th>
            <th scope="col">Bairro</th>
            <th scope="col">Cidade</th>
            <th scope="col">UF</th>
        </tr>
        <tbody>
            @foreach($condominios as $condominio)
                <tr>
                    <td>
                        <a href="/condominio/{{$condominio->id}}/remover">Excluir</a>
                        <a href="/condominio/{{$condominio->id}}/editar">Alterar</a>
                    </td>
                    <td>{{$condominio->nome}}</td>
                    <td>{{$condominio->endereco}}</td>
                    <td>{{$condominio->bairro}}</td>
                    <td>{{$condominio->cidade}}</td>
                    <td>{{$condominio->uf}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="/condominio/criar" class="btn btn-primary">Novo</a>
</div>
@endsection

