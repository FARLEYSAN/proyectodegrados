@extends('layouts.app')

@section('template_title')
    Create Citaslibres Laboratorio
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Citaslibres Laboratorio</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('citaslibres-laboratorios.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('citaslibres-laboratorio.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
