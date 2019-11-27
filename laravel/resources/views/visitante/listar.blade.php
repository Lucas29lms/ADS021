@extends('layouts.app')

@section('conteudo')

    <div class="container">
        <div><h1>Visitantes</h1></div>
        <br>
        <a href="/visitante/criar" class="btn btn-success">Novo</a>
        <br><br>
        <table class="table table-striped table-hover table-bordered">
            <thead>
            <tr>
                <th scope="col">Condominio</th>
                <th scope="col">Unidade</th>
                <th scope="col">Visitante</th>
                <th scope="col">Data</th>
                <th scope="col">Ações</th>
            </tr>
            <tbody>
            @foreach($visitantes as $visitante)
                <tr>
                    <td>{{$visitante->condominio->nome}}</td>
                    <td>{{$visitante->unidade->numero_unidade}}</td>
                    <td>{{$visitante->nome}}</td>
                    <td>{{$visitante->data_entrada}}</td>
                    <td>
                        <a href="/visitante/{{$visitante->id}}/remover" class="btn btn-danger">Excluir</a>
                        <a href="/visitante/{{$visitante->id}}/editar" class="btn btn-primary">Alterar</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {!! $visitantes->links() !!}
    </div>
@endsection

