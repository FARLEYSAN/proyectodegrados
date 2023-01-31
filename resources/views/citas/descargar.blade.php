@extends('layouts.app')

@section('template_title')
    Citasasignadas Medicina
@endsection

@section('content')
    <div class="container-fluid">
        <div>
            <div>
                <input type="text" class="form-control" name="texto">
            </div>

            <div class="col-auto">
                <input type="submit" class="btn btn-primary" value="Buscar">
            </div>
        

        </div>
        
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Citasasignadas Medicina') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('citasasignadas-medicinas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                    @foreach ($citasasignadasMedicinas as $citasasignadasMedicina)
                                        <tr>
                                            <td>{{ $citasasignadasMedicina->id }}</td>
                                            
											<td>{{ $citasasignadasMedicina->Servicio }}</td>
											<td>{{ $citasasignadasMedicina->Nombre }}</td>
											<td>{{ $citasasignadasMedicina->Fecha }}</td>
											<td>{{ $citasasignadasMedicina->Hora }}</td>
											<td>{{ $citasasignadasMedicina->Paciente }}</td>
											<td>{{ $citasasignadasMedicina->Cedula }}</td>

                                            <td>
                                                <form action="{{ route('citasasignadas-medicinas.destroy',$citasasignadasMedicina->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('citasasignadas-medicinas.show',$citasasignadasMedicina->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('citasasignadas-medicinas.edit',$citasasignadasMedicina->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $citasasignadasMedicinas->links() !!}
            </div>
        </div>
    </div>
@endsection
