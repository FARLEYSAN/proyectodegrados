@extends('layouts.app')

@section('template_title')
    Update Citasasignadas Optometrium
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Citasasignadas Optometrium</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('citasasignadas-optometria.update', $citasasignadasOptometrium->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('citasasignadas-optometrium.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
