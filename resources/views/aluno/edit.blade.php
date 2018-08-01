@extends('layouts.app')

@section('content')

    <form action="{{route('aluno.update',['aluno' => $aluno])}}" method="POST">
        @method('PUT')
        {{--        {!! csrf_field() !!}--}}
        @csrf

        @if(fdasdf)
            @endif

        {{method_field('put')}}

        <label for="aluno">Nome do Aluno</label>
        <div class="has-feedback {{ $errors->has("nome") ? 'has-error' : '' }}">
            <input type="text" name="nome" value="{{$aluno->nome}}">
            {!!  $errors->first("nome", '<span class="help-block"><strong>:message</strong></span>') !!}
        </div>

        <button type="submit">Salvar</button>
    </form>
@endsection


