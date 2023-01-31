@extends('layouts.app')

@section('template_title')
    {{ $citasasignadasMedicina->name ?? 'Show Citasasignadas Medicina' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Citasasignadas Medicina</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('citasasignadas-medicinas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Servicio:</strong>
                            {{ $citasasignadasMedicina->Servicio }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $citasasignadasMedicina->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $citasasignadasMedicina->Fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Hora:</strong>
                            {{ $citasasignadasMedicina->Hora }}
                        </div>
                        <div class="form-group">
                            <strong>Paciente:</strong>
                            {{ $citasasignadasMedicina->Paciente }}
                        </div>
                        <div class="form-group">
                            <strong>Cedula:</strong>
                            {{ $citasasignadasMedicina->Cedula }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
