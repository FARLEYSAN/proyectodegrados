@extends('layouts.app')

@section('template_title')
    Update Citaslibres Optometrium
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header bg-dark">
                        <span class="card-title">Confirmar datos</span>
                    </div>
                    <div class="card-body bg-dark">
                        <form method="POST" action="{{ route('citaslibres-optometria.destroy', $citaslibresOptometrium->id) }}"  role="form" enctype="multipart/form-data">
                            
                            @csrf
                            @method('DELETE')

                            @include('citaslibres-optometrium.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('image')
 <div class=" col-lg-6 img-8 min-vh-100  flex-center d-none   flex-center d-none d-lg-block">
 </div>
    
@endsection
