@extends('layouts.app')

@section('content')
<div class="row ">
<div class="container align-self-center  ">
    <div class="row  px-4 justify-content-center text-white align-self-center">
        <div class=" py-4 px-4 justify-content-center text-center" >
            <h2>¡ Tu cita ha sido ASIGNADA con exito !</h2>
            <h3>Recibiras un correo de confirmacion</h3>

           

                
            
        </div>
        <div class=" py-4 px-4 w-50 justify-content-center  align-self-center">
            
            <div>
               <a href="{{route('inicio')}}" type="button" class="btn btn-primary w-100 btn-sm mb-4 p-2">SALIR</a>
            </div>
            
          </div>
        
    </div>
    
</div>
</div>





@endsection

@section('image')
 <div class=" col-lg-6 img-11 min-vh-100  flex-center d-none   flex-center d-none d-lg-block">
 </div>
    
@endsection
