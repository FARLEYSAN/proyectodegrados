<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Paciente') }}
            {{ Form::text('Paciente', $resultado->Paciente, ['class' => 'form-control' . ($errors->has('Paciente') ? ' is-invalid' : ''), 'placeholder' => 'Paciente']) }}
            {!! $errors->first('Paciente', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Cedula') }}
            {{ Form::text('Cedula', $resultado->Cedula, ['class' => 'form-control' . ($errors->has('Cedula') ? ' is-invalid' : ''), 'placeholder' => 'Cedula']) }}
            {!! $errors->first('Cedula', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Resultados') }}
            {{ Form::text('Resultados', $resultado->Resultados, ['class' => 'form-control' . ($errors->has('Resultados') ? ' is-invalid' : ''), 'placeholder' => 'Resultados']) }}
            {!! $errors->first('Resultados', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>