@extends('layouts.app')

@section('content')

    <form action="{{route('aluno.update',['aluno' => $aluno])}}" method="POST">
        @method('PUT')
        {{--        {!! csrf_field() !!}--}}
        @csrf

        {{--{{method_field('put')}}--}}

        <div class="col-md-6">
            <div class="form-group has-feedback {{ $errors->has("nome") ? 'has-error' : '' }}">
                <label for="nome">Nome do aluno</label>
                <input type="nome" class="form-control" id="nome" placeholder="nome" value="{{($aluno->nome)?:old('nome')}}">
                {!!  $errors->first("nome", '<span class="help-block"><strong>:message</strong></span>') !!}
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a class="btn btn-default" href="{{ URL::previous() }}">
                Voltar
            </a>
            <a class="btn btn-default" href="{{ url()->route('aluno.index') }}">
                Voltar
            </a>
        </div>
    </form>
@endsection


