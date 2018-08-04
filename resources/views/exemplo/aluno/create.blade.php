@extends('layouts.app')

@section('content')

    {!! Form::open(['route' => 'aluno.index', 'class' => 'form', "enctype" => "multipart/form-data"]) !!}
    @include('exemplo.aluno.form')
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    {!! link_to_route('aluno.index', 'Voltar', [], ['class' => 'btn btn-default']) !!}
    {!! Form::close() !!}

@endsection


