@extends('layouts.app')

@section('template_title')
    {{ $citaslibresOptometrium->name ?? 'Show Citaslibres Optometrium' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Citaslibres Optometrium</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('citaslibres-optometria.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Servicio:</strong>
                            {{ $citaslibresOptometrium->Servicio }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $citaslibresOptometrium->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $citaslibresOptometrium->Fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Hora:</strong>
                            {{ $citaslibresOptometrium->Hora }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
