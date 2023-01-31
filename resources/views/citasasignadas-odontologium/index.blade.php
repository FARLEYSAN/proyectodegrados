@extends('layouts.app')

@section('template_title')
    Citasasignadas Odontologium
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Citasasignadas Odontologium') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('citasasignadas-odontologia.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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

                    <div class="row p-4">
                        <h3>Por favor digita tu numero de cedula para ver tus citas asignadas</h3>

                    
                    </div>

                    
                    <form action="{{route('citasasignadas-odontologia.index')}}" method="get">
                    <div class="row p-4">
                        <div class=" p-4 w-50">
                            <input type="text" class="form-control" name="buscar" value="{{$buscar}}">
                        </div>
            
                        <div class=" align-self-center">
                            <input type="submit" class="btn btn-primary" value="Buscar">
                        </div>
                        @csrf
                        @method('GET')
                    
            
                    </div>
                </form>

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
                                    @foreach ($citasasignadasOdontologia as $citasasignadasOdontologium)
                                        <tr>
                                            <td>{{ $citasasignadasOdontologium->id }}</td>
                                            
											<td>{{ $citasasignadasOdontologium->Servicio }}</td>
											<td>{{ $citasasignadasOdontologium->Nombre }}</td>
											<td>{{ $citasasignadasOdontologium->Fecha }}</td>
											<td>{{ $citasasignadasOdontologium->Hora }}</td>
											<td>{{ $citasasignadasOdontologium->Paciente }}</td>
											<td>{{ $citasasignadasOdontologium->Cedula }}</td>

                                            <td>
                                                <form action="{{ route('citasasignadas-odontologia.destroy',$citasasignadasOdontologium->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('citasasignadas-odontologia.show',$citasasignadasOdontologium->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('citasasignadas-odontologia.edit',$citasasignadasOdontologium->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $citasasignadasOdontologia->links() !!}
            </div>
        </div>
    </div>
@endsection
