@extends('layouts.app')

@section('template_title')
    Dispodontologium
@endsection

@section('content')

<div class="row ">
    <div class="container  ">
        <div class="row  px-4 justify-content-center text-white align-self-center">
            <div class=" py-4 px-4 justify-content-center text-center" >
                <h3>Estas son las citas disponibles</h3>
                <h3>Elige la que mejor se adapte a tu necesidad.</h3>
    
               
    
                    
                
            </div>
            @if ($message = Session::get("success"))
                <div class="alert alert-success">
                    <p>{{$message}}</p>
                </div>
            @endif

            <div class="table-responsive py-4 px-4 w-100   justify-content-center  align-self-center">
                <table class="table table-striped table-hover table-light">
                    <thead class="thead  bg-primary">
                        <tr>
                            <th>No</th>
                            <th>Servicio</th>
                            <th>Nombre</th>
                            <th>Fecha</th>
                            <th>Hora</th>
                            <th>Asignar</th>
                            
                            
                        </tr>
                    </thead>
    
                    <tbody>
                        @foreach ($dispodontologia as $dispodontologium)      
                        <tr>
                            <td>{{++$i}}</td>
                            <td>{{$dispodontologium->Servicio}}</td>
                            <td>{{$dispodontologium->Nombre}}</td>
                            <td>{{$dispodontologium->Fecha}}</td>
                            <td>{{$dispodontologium->Hora}}</td>
                            <td>
                                <form action="{{route('disponible.destroy', $dispodontologium)}}" method="POST">
                                @csrf
    
                                @method('delete')
                                <a class="btn btn-sm btn-primary " href=""><i class="fa fa-fw fa-eye"></i> ELEGIR</a>
    
                                </form>
    
    
    
    
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $dispodontologia->links() !!}
                
            </div>
            
        </div>
        
    </div>
    </div>
    
    
    
    
    
    @endsection
    
    @section('image')
     <div class=" col-lg-6 img-3 min-vh-100  flex-center d-none   flex-center d-none d-lg-block">
     </div>
@endsection
