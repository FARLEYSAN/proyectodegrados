@extends('layouts.app')

@section('content')
<div class="row ">
<div class="container align-self-center  ">
    <div class="row  px-4 justify-content-center text-white align-self-center">
        <div class=" py-4 px-4 justify-content-center text-center" >
            <h3>Tu cita con el Dr {{$disponible->Nombre}} ha sido asignada con exito</h3>
            <h3>¿ Que deseas realizar ?</h3>

           

                
            
        </div>
       
    
</div>
</div>





@endsection

@section('image')
 <div class=" col-lg-6 img-3 min-vh-100  flex-center d-none   flex-center d-none d-lg-block">
 </div>
    
@endsection
