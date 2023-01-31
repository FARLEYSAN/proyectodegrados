@extends('layouts.app')

@section('template_title')
    Update Citasasignadas Medicina
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Citasasignadas Medicina</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('citasasignadas-medicinas.destroy', $citasasignadasMedicina->id) }}"  role="form" enctype="multipart/form-data">
                            
                            @csrf
                            @method('DELETE')

                            @include('citasasignadas-medicina.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
