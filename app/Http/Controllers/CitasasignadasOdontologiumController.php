<?php

namespace App\Http\Controllers;

use App\Models\CitasasignadasOdontologium;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;
use App\Models\User;

/**
 * Class CitasasignadasOdontologiumController
 * @package App\Http\Controllers
 */
class CitasasignadasOdontologiumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
     $buscar=trim($request->get('buscar'));

      $citasasignadasOdontologia=DB::table('citasasignadas_medicinas')
     ->select('id', 'Servicio', 'Nombre', 'Fecha', 'Hora', 'Paciente', 'Cedula')
     ->where('Cedula', '=', $buscar)
     ->orderBy('Cedula','asc')
     ->paginate(5);
     
     return view('citasasignadas-odontologium.index', compact('citasasignadasOdontologia','buscar'));
     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $citasasignadasOdontologium = new CitasasignadasOdontologium();
        return view('citasasignadas-odontologium.create', compact('citasasignadasOdontologium'));
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

        $citasasignadasOdontologium = CitasasignadasOdontologium::create($request->all());

        return redirect()->route('citasasignadas-odontologia.index')
            ->with('success', 'CitasasignadasOdontologium created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $citasasignadasOdontologium = CitasasignadasOdontologium::find($id);

        return view('citasasignadas-odontologium.show', compact('citasasignadasOdontologium'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $citasasignadasOdontologium = CitasasignadasOdontologium::find($id);

        return view('citasasignadas-odontologium.edit', compact('citasasignadasOdontologium'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CitasasignadasOdontologium $citasasignadasOdontologium
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CitasasignadasOdontologium $citasasignadasOdontologium)
    {
        request()->validate(CitasasignadasOdontologium::$rules);

        $citasasignadasOdontologium->update($request->all());

        return redirect()->route('citasasignadas-odontologia.index')
            ->with('success', 'CitasasignadasOdontologium updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $citasasignadasOdontologium = CitasasignadasOdontologium::find($id)->delete();

        $correo = new ContactanosMailable;
         Mail::to($request->user())->send($correo);

        return redirect()->route('citasasignadas-odontologia.index')
            ->with('success', 'CitasasignadasOdontologium deleted successfully');
    }
}
