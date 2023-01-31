<?php

namespace App\Http\Controllers;

use App\Models\CitaslibresLaboratorio;
use App\Models\CitasasignadasLaboratorio;
use App\Models\CitasasignadasMedicina;
use Illuminate\Http\Request;
use App\Mail\ConfirmacionMailable;
use Illuminate\Support\Facades\Mail;
use App\Models\User;

/**
 * Class CitaslibresLaboratorioController
 * @package App\Http\Controllers
 */
class CitaslibresLaboratorioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $citaslibresLaboratorios = CitaslibresLaboratorio::paginate(6);

        return view('citaslibres-laboratorio.index', compact('citaslibresLaboratorios'))
            ->with('i', (request()->input('page', 1) - 1) * $citaslibresLaboratorios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $citaslibresLaboratorio = new CitaslibresLaboratorio();
        return view('citaslibres-laboratorio.create', compact('citaslibresLaboratorio'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CitasasignadasLaboratorio::$rules);
        

        $citasasignadasLaboratorio = CitasasignadasLaboratorio::create($request->all());

        

       return redirect()->route('citaslibres-laboratorios.index')
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
        $citaslibresLaboratorio = CitaslibresLaboratorio::find($id);

        return view('citaslibres-laboratorio.show', compact('citaslibresLaboratorio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $citaslibresLaboratorio = CitaslibresLaboratorio::find($id);

        return view('citaslibres-laboratorio.edit', compact('citaslibresLaboratorio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CitaslibresLaboratorio $citaslibresLaboratorio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CitaslibresLaboratorio $citaslibresLaboratorio)
    {
        request()->validate(CitaslibresLaboratorio::$rules);

        $citaslibresLaboratorio->update($request->all());

        return redirect()->route('citaslibres-laboratorios.index')
            ->with('success', 'CitaslibresLaboratorio updated successfully');
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
        
        $citaslibresLaboratorio = CitaslibresLaboratorio::find($id)->delete();

        $correo = new ConfirmacionMailable;
        Mail::to($request->user())->send($correo);

        return view('confirmacion');
    }
}
