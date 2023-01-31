@extends('layouts.app')

@section('template_title')
    {{ $citasasignadasOptometrium->name ?? 'Show Citasasignadas Optometrium' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Citasasignadas Optometrium</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('citasasignadas-optometria.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Servicio:</strong>
                            {{ $citasasignadasOptometrium->Servicio }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $citasasignadasOptometrium->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $citasasignadasOptometrium->Fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Hora:</strong>
                            {{ $citasasignadasOptometrium->Hora }}
                        </div>
                        <div class="form-group">
                            <strong>Paciente:</strong>
                            {{ $citasasignadasOptometrium->Paciente }}
                        </div>
                        <div class="form-group">
                            <strong>Cedula:</strong>
                            {{ $citasasignadasOptometrium->Cedula }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
