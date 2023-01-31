<?php

namespace App\Http\Controllers;

use App\Models\CitaslibresOdontologium;
use App\Models\CitasasignadasOdontologium;
use App\Models\CitasasignadasMedicina;
use Illuminate\Http\Request;
use App\Mail\ConfirmacionMailable;
use Illuminate\Support\Facades\Mail;
use App\Models\User;

/**
 * Class CitaslibresOdontologiumController
 * @package App\Http\Controllers
 */
class CitaslibresOdontologiumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $citaslibresOdontologia = CitaslibresOdontologium::paginate(6);

        return view('citaslibres-odontologium.index', compact('citaslibresOdontologia'))
            ->with('i', (request()->input('page', 1) - 1) * $citaslibresOdontologia->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $citaslibresOdontologium = new CitaslibresOdontologium();
        return view('citaslibres-odontologium.create', compact('citaslibresOdontologium'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CitasasignadasOdontologium::$rules);
        

        $citasasignadasOdontologia = CitasasignadasOdontologium::create($request->all());

        

       return redirect()->route('citaslibres-odontologia.index')
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
        $citaslibresOdontologium = CitaslibresOdontologium::find($id);

        return view('citaslibres-odontologium.show', compact('citaslibresOdontologium'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $citaslibresOdontologium = CitaslibresOdontologium::find($id);

        return view('citaslibres-odontologium.edit', compact('citaslibresOdontologium'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CitaslibresOdontologium $citaslibresOdontologium
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CitaslibresOdontologium $citaslibresOdontologium)
    {
        request()->validate(CitaslibresOdontologium::$rules);

        $citaslibresOdontologium->update($request->all());

        return redirect()->route('citaslibres-odontologia.index')
            ->with('success', 'CitaslibresOdontologium updated successfully');
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
        
        $citaslibresOdontologia = CitaslibresOdontologium::find($id)->delete();

        $correo = new ConfirmacionMailable;
        Mail::to($request->user())->send($correo);

        return view('confirmacion');
    }
}
