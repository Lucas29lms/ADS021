@extends('layouts.app')

@section('conteudo')

    <div class="container">
        <div><h1>Condominios</h1></div>
        <br>
        <a href="/condominio/criar" class="btn btn-success">Novo</a>
        <br><br>
        <table class="table table-striped table-hover table-bordered">
            <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Endereço</th>
                <th scope="col">Bairro</th>
                <th scope="col">Cidade</th>
                <th scope="col">UF</th>
                <th scope="col">Ações</th>
            </tr>
            <tbody>
            @foreach($condominios as $condominio)
                <tr>
                    <td>{{$condominio->nome}}</td>
                    <td>{{$condominio->endereco}}</td>
                    <td>{{$condominio->bairro}}</td>
                    <td>{{$condominio->cidade}}</td>
                    <td>{{$condominio->uf}}</td>
                    <td>
                        <a href="/condominio/{{$condominio->id}}/remover" class="btn btn-danger">Excluir</a>
                        <a href="/condominio/{{$condominio->id}}/editar" class="btn btn-primary">Alterar</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {!! $condominios->links() !!}

        <br>
    </div>

@endsection

