@extends('layouts.layout')

@section('content')
    <div class="ibox-content">
        <a href="{{route('aluno.create')}}">
            <button type="button" class="btn btn-warning">Cadastrar</button>
        </a>

        <table class="table table-bordered">
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
                    <td>
                        <a href="{{route('restore', ['id' => $aluno->id])}}">
                            Ativar
                        </a>

                    </td>
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


