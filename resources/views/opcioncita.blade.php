@extends('layouts.app')

@section('content')
<div class="row ">
<div class="container align-self-center  ">
    <div class="row  px-4 justify-content-center text-white align-self-center">
        <div class=" py-4 px-4 justify-content-center text-center" >
            <h3>Ahora elige la opcion segun la cita que necesites.</h3>
            <h3>Necesitas una cita para:</h3>

           

                
            
        </div>
        <div class=" py-4 px-4 w-50 justify-content-center  align-self-center">
            <div>
               <a href="{{url('citaslibres-medicinas')}}" type="button" class="btn btn-primary w-100 btn-sm mb-4 p-2">MEDICO GENERAL</a>
            </div>
            <div>
               <a href="{{url('citaslibres-laboratorios')}}" type="button" class="btn btn-primary w-100 btn-sm mb-4 p-2">LABORATORIO</a>
            </div>
            <div>
               <a href="{{url('citaslibres-odontologia')}}" type="button" class="btn btn-primary w-100 btn-sm mb-4 p-2">ODONTOLOGIA</a>
            </div>
            <div>
                <a href="{{url('citaslibres-optometria')}}" type="button" class="btn btn-primary w-100 btn-sm mb-4 p-2">OPTOMETRIA</a>
            </div>
          </div>
        
    </div>
    
</div>
</div>





@endsection

@section('image')
 <div class=" col-lg-6 img-1 min-vh-100  flex-center d-none   flex-center d-none d-lg-block">
 </div>
    
@endsection
