<?php

namespace App\Http\Controllers;

use App\Models\CitaslibresMedicina;
use App\Models\CitasasignadasMedicina;
use Illuminate\Http\Request;
use App\Mail\ConfirmacionMailable;
use Illuminate\Support\Facades\Mail;
use App\Models\User;

/**
 * Class CitaslibresMedicinaController
 * @package App\Http\Controllers
 */
class CitaslibresMedicinaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $citaslibresMedicinas = CitaslibresMedicina::paginate(6);

        return view('citaslibres-medicina.index', compact('citaslibresMedicinas'))
            ->with('i', (request()->input('page', 1) - 1) * $citaslibresMedicinas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $citaslibresMedicina = new CitaslibresMedicina();
        return view('citaslibres-medicina.create', compact('citaslibresMedicina'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        request()->validate(CitasasignadasMedicina::$rules);
        

        $citasasignadasMedicina = CitasasignadasMedicina::create($request->all());
        
        $citaslibresMedicina = CitaslibresMedicina::find($id)->delete();

        return redirect()->route('citaslibres-medicinas.index')
        ->with('success', 'cita asignada correctamente' );
        

        

        

        

       

           
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $citaslibresMedicina = CitaslibresMedicina::find($id);

        return view('citaslibres-medicina.show', compact('citaslibresMedicina'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $citaslibresMedicina = CitaslibresMedicina::find($id);

        return view('citaslibres-medicina.edit', compact('citaslibresMedicina'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CitaslibresMedicina $citaslibresMedicina
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CitaslibresMedicina $citaslibresMedicina)
    {
        request()->validate(CitaslibresMedicina::$rules);

        $citaslibresMedicina->update($request->all());

        return redirect()->route('citaslibres-medicinas.index')
            ->with('success', 'CitaslibresMedicina updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy( Request $request, $id)
    {

        request()->validate(CitasasignadasMedicina::$rules);
        

        $citasasignadasMedicina = CitasasignadasMedicina::create($request->all());
        
        $citaslibresMedicina = CitaslibresMedicina::find($id)->delete();

        $correo = new ConfirmacionMailable;
        Mail::to($request->user())->send($correo);

        return view('confirmacion');
    }
}
