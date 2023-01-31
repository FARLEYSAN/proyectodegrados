@extends('layouts.app')

@section('template_title')
    {{ $resultado->name ?? 'Show Resultado' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Resultado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('resultados.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Paciente:</strong>
                            {{ $resultado->Paciente }}
                        </div>
                        <div class="form-group">
                            <strong>Cedula:</strong>
                            {{ $resultado->Cedula }}
                        </div>
                        <div class="form-group">
                            <strong>Resultados:</strong>
                            {{ $resultado->Resultados }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
