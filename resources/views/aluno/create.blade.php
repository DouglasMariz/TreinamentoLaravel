@extends('layouts.app')

@section('content')
    <form action="{{route('aluno.index')}}" method="POST">
        {{--        {!! csrf_field() !!}--}}
        @csrf

        <label for="aluno">Nome do Aluno</label>
        <div class="has-feedback {{ $errors->has("nome") ? 'has-error' : '' }}">
            <input type="text" name="nome">
            {!!  $errors->first("nome", '<span class="help-block"><strong>:message</strong></span>') !!}
        </div>

        <button type="submit">Salvar</button>
    </form>
@endsection


