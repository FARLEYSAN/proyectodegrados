@extends('layouts.app')

@section('template_title')
    Citaslibres Medicina
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card ">
                    <div class="card-header bg-dark">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Citas Medicina General') }}
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
                                    @foreach ($citaslibresMedicinas as $citaslibresMedicina)
                                        <tr>
                                            <td>{{ $citaslibresMedicina->id }}</td>
                                            
											<td>{{ $citaslibresMedicina->Servicio }}</td>
											<td>{{ $citaslibresMedicina->Nombre }}</td>
											<td>{{ $citaslibresMedicina->Fecha }}</td>
											<td>{{ $citaslibresMedicina->Hora }}</td>

                                            <td>
                                                <form action="{{ route('citaslibres-medicinas.edit',$citaslibresMedicina->id) }}" method="POST">
                                                
                                                    <a class="btn btn-sm btn-success w-100" href="{{ route('citaslibres-medicinas.edit',$citaslibresMedicina->id) }}"><i class="fa fa-fw fa-edit"></i> ASIGNAR</a>
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
                {!! $citaslibresMedicinas->links() !!}
            </div>
        </div>
    </div>
@endsection

@section('image')
 <div class=" col-lg-6 img-5 min-vh-100  flex-center d-none   flex-center d-none d-lg-block">
 </div>
    
@endsection
