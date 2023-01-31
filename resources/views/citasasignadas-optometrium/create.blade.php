@extends('layouts.app')

@section('template_title')
    Create Citasasignadas Optometrium
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Citasasignadas Optometrium</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('citasasignadas-optometria.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('citasasignadas-optometrium.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
