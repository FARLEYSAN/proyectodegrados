@extends('layouts.app')

@section('template_title')
    Citasasignadas Optometrium
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Citasasignadas Optometrium') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('citasasignadas-optometria.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Servicio</th>
										<th>Nombre</th>
										<th>Fecha</th>
										<th>Hora</th>
										<th>Paciente</th>
										<th>Cedula</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($citasasignadasOptometria as $citasasignadasOptometrium)
                                        <tr>
                                            <td>{{ $citasasignadasOptometrium->id }}</td>
                                            
											<td>{{ $citasasignadasOptometrium->Servicio }}</td>
											<td>{{ $citasasignadasOptometrium->Nombre }}</td>
											<td>{{ $citasasignadasOptometrium->Fecha }}</td>
											<td>{{ $citasasignadasOptometrium->Hora }}</td>
											<td>{{ $citasasignadasOptometrium->Paciente }}</td>
											<td>{{ $citasasignadasOptometrium->Cedula }}</td>

                                            <td>
                                                <form action="{{ route('citasasignadas-optometria.destroy',$citasasignadasOptometrium->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('citasasignadas-optometria.show',$citasasignadasOptometrium->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('citasasignadas-optometria.edit',$citasasignadasOptometrium->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $citasasignadasOptometria->links() !!}
            </div>
        </div>
    </div>
@endsection
