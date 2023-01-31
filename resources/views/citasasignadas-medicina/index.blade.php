@extends('layouts.app')

@section('template_title')
    Citasasignadas Medicina
@endsection

@section('content')
    <div class="container-fluid">
        
    
        <div class="row ">
            <div class="col-sm-12 ">
                <div class="card bg-dark  ">
                    
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    <div class="row p-4 text-center">
                        <h3>Por favor digita tu numero de cedula para ver tus citas asignadas</h3>

                    
                    </div>

                    
                    <form action="{{route('citasasignadas-medicinas.index')}}" method="get">
                    <div class="row py-4">
                        <div class=" p-4 w-50">
                            <input type="text" class="form-control" name="buscar" placeholder="Digita tu Cedula aqui " value="{{$buscar}}">
                        </div>
            
                        <div class=" align-self-center">
                            <input type="submit" class="btn btn-primary" value="Buscar">
                        </div>
                        @csrf
                        @method('GET')
                    
            
                    </div>
                </form>

                    <div class="card-body bg-dark">
                        <div class="table-responsive bg-dark ">
                            <table class="table table-striped ">
                                
                                <tbody class="text-light">
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
                                                    
                                                    
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> CANCELAR CITA</button>
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

@section('image')
 <div class=" col-lg-6 img-10 min-vh-100  flex-center d-none   flex-center d-none d-lg-block">
 </div>
    
@endsection

