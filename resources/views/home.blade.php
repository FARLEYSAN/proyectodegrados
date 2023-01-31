@extends('layouts.app')

@section('content')
<div class="row ">
<div class="container align-self-center  ">
    <div class="row  px-4 justify-content-center text-white align-self-center">
        <div class=" py-4 px-4 justify-content-center text-center" >
            <h3>Hola <strong>{{ Auth::user()->name }}</strong>  es un placer servirte y trabajar en pro de tu salud y la de tu familia</h3>
            <h3>¿ Que deseas realizar ?</h3>

           

                
            
        </div>
        <div class=" py-4 px-4 w-50 justify-content-center  align-self-center">
            <div>
               <a href="{{route('opcioncita')}}" type="button" class="btn btn-primary w-100 btn-sm mb-4 p-2">SOLICITAR CITA</a>
            </div>
            <div>
               <a href="{{route('citasasignadas-medicinas.index')}}" type="button" class="btn btn-primary w-100 btn-sm mb-4 p-2">CANCELAR CITA</a>
            </div>
            <div>
               <a href="{{route('resultado.index')}}" type="button" class="btn btn-primary w-100 btn-sm mb-4 p-2">DESCARGAR RESULTADOS</a>
            </div>
          </div>
        
    </div>
    
</div>
</div>





@endsection

@section('image')
 <div class=" col-lg-6 img-4 min-vh-100  flex-center d-none   flex-center d-none d-lg-block">
 </div>
    
@endsection
