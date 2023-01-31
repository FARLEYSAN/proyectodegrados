@extends('layouts.app')

@section('template_title')
    {{ $citasasignadasOdontologium->name ?? 'Show Citasasignadas Odontologium' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Citasasignadas Odontologium</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('citasasignadas-odontologia.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Servicio:</strong>
                            {{ $citasasignadasOdontologium->Servicio }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $citasasignadasOdontologium->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $citasasignadasOdontologium->Fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Hora:</strong>
                            {{ $citasasignadasOdontologium->Hora }}
                        </div>
                        <div class="form-group">
                            <strong>Paciente:</strong>
                            {{ $citasasignadasOdontologium->Paciente }}
                        </div>
                        <div class="form-group">
                            <strong>Cedula:</strong>
                            {{ $citasasignadasOdontologium->Cedula }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
