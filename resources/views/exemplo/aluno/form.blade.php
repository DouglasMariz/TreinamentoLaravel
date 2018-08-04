<div class="row">
    <div class="col-md-6">
        <div class="form-group has-feedback {{ $errors->has("nome") ? 'has-error' : '' }}">
            {!! Form::label('nome', 'Nome do Aluno') !!}
            {!! Form::text('nome', old('nome'), ['class' => 'form-control', 'placeholde' => 'Digita o nome do aluno']) !!}
            {!!  $errors->first("nome", '<span class="help-block"><strong>:message</strong></span>') !!}
        </div>
    </div>
</div>
