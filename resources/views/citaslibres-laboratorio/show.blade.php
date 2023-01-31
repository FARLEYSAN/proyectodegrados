@extends('layouts.app')

@section('template_title')
    {{ $citaslibresLaboratorio->name ?? 'Show Citaslibres Laboratorio' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Citaslibres Laboratorio</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('citaslibres-laboratorios.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Servicio:</strong>
                            {{ $citaslibresLaboratorio->Servicio }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $citaslibresLaboratorio->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $citaslibresLaboratorio->Fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Hora:</strong>
                            {{ $citaslibresLaboratorio->Hora }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
