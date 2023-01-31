@extends('layouts.app')

@section('template_title')
    {{ $citaslibresOdontologium->name ?? 'Show Citaslibres Odontologium' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Citaslibres Odontologium</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('citaslibres-odontologia.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Servicio:</strong>
                            {{ $citaslibresOdontologium->Servicio }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $citaslibresOdontologium->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $citaslibresOdontologium->Fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Hora:</strong>
                            {{ $citaslibresOdontologium->Hora }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
