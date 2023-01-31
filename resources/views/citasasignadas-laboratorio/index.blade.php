@extends('layouts.app')

@section('template_title')
    Citasasignadas Laboratorio
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Citasasignadas Laboratorio') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('citasasignadas-laboratorios.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                    @foreach ($citasasignadasLaboratorios as $citasasignadasLaboratorio)
                                        <tr>
                                            <td>{{ $citasasignadasLaboratorio->id }}</td>
                                            
											<td>{{ $citasasignadasLaboratorio->Servicio }}</td>
											<td>{{ $citasasignadasLaboratorio->Nombre }}</td>
											<td>{{ $citasasignadasLaboratorio->Fecha }}</td>
											<td>{{ $citasasignadasLaboratorio->Hora }}</td>
											<td>{{ $citasasignadasLaboratorio->Paciente }}</td>
											<td>{{ $citasasignadasLaboratorio->Cedula }}</td>

                                            <td>
                                                <form action="{{ route('citasasignadas-laboratorios.destroy',$citasasignadasLaboratorio->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('citasasignadas-laboratorios.show',$citasasignadasLaboratorio->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('citasasignadas-laboratorios.edit',$citasasignadasLaboratorio->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $citasasignadasLaboratorios->links() !!}
            </div>
        </div>
    </div>
@endsection
