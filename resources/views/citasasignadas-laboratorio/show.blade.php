@extends('layouts.app')

@section('template_title')
    {{ $citasasignadasLaboratorio->name ?? 'Show Citasasignadas Laboratorio' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Citasasignadas Laboratorio</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('citasasignadas-laboratorios.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Servicio:</strong>
                            {{ $citasasignadasLaboratorio->Servicio }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $citasasignadasLaboratorio->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $citasasignadasLaboratorio->Fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Hora:</strong>
                            {{ $citasasignadasLaboratorio->Hora }}
                        </div>
                        <div class="form-group">
                            <strong>Paciente:</strong>
                            {{ $citasasignadasLaboratorio->Paciente }}
                        </div>
                        <div class="form-group">
                            <strong>Cedula:</strong>
                            {{ $citasasignadasLaboratorio->Cedula }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
