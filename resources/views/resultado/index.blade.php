@extends('layouts.app')

@section('template_title')
    Resultado
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
                        <h3>Aqui podras ver los resultados de tus examenes y pruebas realizadas en la IPS VIDA</h3>

                    
                    </div>

                    
                    <form action="{{route('resultado.index')}}" method="get">
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
                                    @foreach ($resultados as $resultado)
                                        <tr>
                                            <td>{{ $resultado->id }}</td>
                                            
											<td>{{ $resultado->Paciente }}</td>
											<td>{{ $resultado->Cedula }}</td>
											<td>{{ $resultado->Resultados }}</td>
                                            <td>{{ $resultado->Tipo_resultado }}</td>
										

                                            <td>
                                                
                                                    
                                                    
                                                   
                                                    <a type="submit" class="btn btn-light btn-sm text-primary" href="/resultados/ejemplo1.pdf" download=""   > DESCARGAR</a>
                                                
                                                
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                   
                </div>
                {!! $resultados->links() !!}
            </div>
        </div>
    </div>
@endsection

@section('image')
 <div class=" col-lg-6 img-9 min-vh-100  flex-center d-none   flex-center d-none d-lg-block">
 </div>
    
@endsection

