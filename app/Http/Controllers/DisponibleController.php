<?php

namespace App\Http\Controllers;

use App\Models\Disponible;
use Illuminate\Http\Request;

class DisponibleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    
        
       /* $disponibles['disponibles']=Disponible::paginate();
        return view('citageneral',$disponibles);
        */
        

     {   

      $disponibles = Disponible::paginate();

        return view('citas.citageneral', compact('disponibles'))
            ->with('i', (request()->input('page', 1) - 1) * $disponibles->perPage());

     }
            


   
       /* $disponibles = Disponible::latest()->paginate(2);
        return view('citageneral', compact('disponibles'))
        ->with('i', (request()->input('page', 1) -1) * 5);
        */
    
            

         /*   $disponibles = \DB::table('disponibles')
            ->select('disponibles.*')
            ->orderBy('Servicio','DESC')
            ->get();
            return view('citageneral')->with('disponibles',$disponibles);
          */  

        
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        $displaboratorios = Displaboratorio::create($request->all());

        return redirect()->route('asignadagenerals.index')
            ->with('success', 'Tu cita ha sido asignada correctamente, recibiras un correo con toda la informacion.');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Disponible  $disponible
     * @return \Illuminate\Http\Response
     */
    public function show(Disponible $disponible)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Disponible  $disponible
     * @return \Illuminate\Http\Response
     */
    public function edit(Disponible $disponible)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Disponible  $disponible
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Disponible $disponible)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Disponible  $disponible
     * @return \Illuminate\Http\Response
     */
    public function destroy(Disponible $disponible)
    {
        //
        $disponible->delete();
        return redirect()->route('home');
    }
}
