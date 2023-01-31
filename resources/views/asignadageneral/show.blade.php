@extends('layouts.app')

@section('template_title')
    {{ $asignadageneral->name ?? 'Show Asignadageneral' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Asignadageneral</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('asignadagenerals.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Servicio:</strong>
                            {{ $asignadageneral->Servicio }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $asignadageneral->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $asignadageneral->Fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Hora:</strong>
                            {{ $asignadageneral->Hora }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
