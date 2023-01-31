@extends('layouts.app')

@section('template_title')
    Citaslibres Laboratorio
@endsection


@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card ">
                    <div class="card-header bg-dark">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Citas Laboratorio') }}
                            </span>

                             
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-dark ">
                        <div class="table-responsive  ">
                            <table class="table table-striped table-hover">
                                <thead class="thead bg-white">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Servicio</th>
										<th>Nombre</th>
										<th>Fecha</th>
										<th>Hora</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody class=" text-light">
                                    @foreach ($citaslibresLaboratorios as $citaslibresLaboratorio)
                                        <tr>
                                            <td>{{ $citaslibresLaboratorio->id }}</td>
                                            
											<td>{{ $citaslibresLaboratorio->Servicio }}</td>
											<td>{{ $citaslibresLaboratorio->Nombre }}</td>
											<td>{{ $citaslibresLaboratorio->Fecha }}</td>
											<td>{{ $citaslibresLaboratorio->Hora }}</td>

                                            <td>
                                                <form action="{{ route('citaslibres-laboratorios.destroy',$citaslibresLaboratorio->id) }}" method="POST">
                                                    
                                                    <a class="btn btn-sm btn-success  w-100" href="{{ route('citaslibres-laboratorios.edit',$citaslibresLaboratorio->id) }}"><i class="fa fa-fw fa-edit"></i> ASIGNAR</a>
                                                    @csrf
                                                 
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $citaslibresLaboratorios->links() !!}
            </div>
        </div>
    </div>
@endsection

@section('image')
 <div class=" col-lg-6 img-6 min-vh-100  flex-center d-none   flex-center d-none d-lg-block">
 </div>
    
@endsection
