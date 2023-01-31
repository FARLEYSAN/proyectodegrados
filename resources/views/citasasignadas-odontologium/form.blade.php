<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Servicio') }}
            {{ Form::text('Servicio', $citasasignadasOdontologium->Servicio, ['class' => 'form-control' . ($errors->has('Servicio') ? ' is-invalid' : ''), 'placeholder' => 'Servicio']) }}
            {!! $errors->first('Servicio', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('Nombre', $citasasignadasOdontologium->Nombre, ['class' => 'form-control' . ($errors->has('Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha') }}
            {{ Form::text('Fecha', $citasasignadasOdontologium->Fecha, ['class' => 'form-control' . ($errors->has('Fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('Fecha', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Hora') }}
            {{ Form::text('Hora', $citasasignadasOdontologium->Hora, ['class' => 'form-control' . ($errors->has('Hora') ? ' is-invalid' : ''), 'placeholder' => 'Hora']) }}
            {!! $errors->first('Hora', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Paciente') }}
            {{ Form::text('Paciente', $citasasignadasOdontologium->Paciente, ['class' => 'form-control' . ($errors->has('Paciente') ? ' is-invalid' : ''), 'placeholder' => 'Paciente']) }}
            {!! $errors->first('Paciente', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Cedula') }}
            {{ Form::text('Cedula', $citasasignadasOdontologium->Cedula, ['class' => 'form-control' . ($errors->has('Cedula') ? ' is-invalid' : ''), 'placeholder' => 'Cedula']) }}
            {!! $errors->first('Cedula', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>