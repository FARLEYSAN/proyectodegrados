<div class="box box-info padding-1 text-light">
    <div class="box-body">


        <div class="form-group">
            {{ Form::label('No') }}
            {{ Form::text('id', $citaslibresMedicina->id, ['class' => 'form-control' . ($errors->has('id') ? ' is-invalid' : ''), 'readonly', 'placeholder' => 'id']) }}
            {!! $errors->first('id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Servicio') }}
            {{ Form::text('Servicio', $citaslibresMedicina->Servicio, ['class' => 'form-control' . ($errors->has('Servicio') ? ' is-invalid' : ''), 'readonly', 'placeholder' => 'Servicio']) }}
            {!! $errors->first('Servicio', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('Nombre', $citaslibresMedicina->Nombre, ['class' => 'form-control' . ($errors->has('Nombre') ? ' is-invalid' : ''), 'readonly', 'placeholder' => 'Nombre']) }}
            {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha') }}
            {{ Form::text('Fecha', $citaslibresMedicina->Fecha, ['class' => 'form-control' . ($errors->has('Fecha') ? ' is-invalid' : ''), 'readonly', 'placeholder' => 'Fecha']) }}
            {!! $errors->first('Fecha', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Hora') }}
            {{ Form::text('Hora', $citaslibresMedicina->Hora, ['class' => 'form-control' . ($errors->has('Hora') ? ' is-invalid' : ''), 'readonly', 'placeholder' => 'Hora']) }}
            {!! $errors->first('Hora', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Paciente') }}
            <input class="form-control " type="text" id="Cedula" value="{{ Auth::user()->name }} {{ Auth::user()->last_name }}" name="Paciente" readonly >
            {!! $errors->first('Paciente', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Cedula') }}
            <input class="form-control" type="text" id="Cedula" value="{{ Auth::user()->numero_documento }}" name="Cedula" readonly>
            {!! $errors->first('Cedula', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20 ">
        <button type="submit" class="btn btn-success ">CONFIRMAR</button>
    </div>
</div>