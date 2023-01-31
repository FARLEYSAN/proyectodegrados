<div class="box box-info text-dark padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Servicio') }}
            {{ Form::text('Servicio', $asignadageneral->Servicio, ['class' => 'form-control' . ($errors->has('Servicio') ? ' is-invalid' : ''), 'readonly', 'placeholder' => 'Servicio']) }}
            {!! $errors->first('Servicio', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('Nombre', $asignadageneral->Nombre, ['class' => 'form-control' . ($errors->has('Nombre') ? ' is-invalid' : ''), 'value' => "kiko" ,  'placeholder' => 'Nombre']), }}
            {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha') }}
            {{ Form::text('Fecha', $asignadageneral->Fecha, ['class' => 'form-control' . ($errors->has('Fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('Fecha', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Hora') }}
            {{ Form::text('Hora', $asignadageneral->Hora, ['class' => 'form-control' . ($errors->has('Hora') ? ' is-invalid' : ''), 'placeholder' => 'Hora']) }}
            {!! $errors->first('Hora', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">crear</button>
    </div>
</div>