@extends('layouts.app')

@section('template_title')
    Update Asignadageneral
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Asignadageneral</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('asignadagenerals.store') }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('POST') }}
                            @csrf

                            @include('asignadageneral.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
