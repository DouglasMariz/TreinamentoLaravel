@extends('layouts.app')

@section('content')
    <div class="ibox-content">
        <a href="{{route('aluno.create')}}">Cadastrar</a>

        <table class="table">
            <thead>
            <tr>
                <th>#id</th>
                <th>Nome</th>
                <th>data criação</th>
                <th>Ações</th>
            </tr>
            </thead>
            <tbody>

            @forelse($alunosModel as $key => $aluno)
                <tr>
                    <td>{{$aluno->id}}</td>
                    <td>{{$aluno->nome}}</td>
                    <td>{{$aluno->created_at->format('d/m/Y h:i')}}</td>
                    <td><a href="{{route('aluno.edit', ['id' => $aluno->id])}}">Editar</a></td>
                </tr>
            @empty
                <tr>
                    <td colspan="2"> <h1>Sem registros</h1></td>
                </tr>
            @endforelse
            </tbody>
        </table>

    </div>
@endsection


