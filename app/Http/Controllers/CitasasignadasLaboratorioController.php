<?php

namespace App\Http\Controllers;

use App\Models\CitasasignadasLaboratorio;
use Illuminate\Http\Request;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;
use App\Models\User;

/**
 * Class CitasasignadasLaboratorioController
 * @package App\Http\Controllers
 */
class CitasasignadasLaboratorioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $citasasignadasLaboratorios = CitasasignadasLaboratorio::paginate();

        return view('citasasignadas-laboratorio.index', compact('citasasignadasLaboratorios'))
            ->with('i', (request()->input('page', 1) - 1) * $citasasignadasLaboratorios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $citasasignadasLaboratorio = new CitasasignadasLaboratorio();
        return view('citasasignadas-laboratorio.create', compact('citasasignadasLaboratorio'));
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

        return redirect()->route('citasasignadas-laboratorios.index')
            ->with('success', 'CitasasignadasLaboratorio created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $citasasignadasLaboratorio = CitasasignadasLaboratorio::find($id);

        return view('citasasignadas-laboratorio.show', compact('citasasignadasLaboratorio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $citasasignadasLaboratorio = CitasasignadasLaboratorio::find($id);

        return view('citasasignadas-laboratorio.edit', compact('citasasignadasLaboratorio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CitasasignadasLaboratorio $citasasignadasLaboratorio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CitasasignadasLaboratorio $citasasignadasLaboratorio)
    {
        request()->validate(CitasasignadasLaboratorio::$rules);

        $citasasignadasLaboratorio->update($request->all());

        return redirect()->route('citasasignadas-laboratorios.index')
            ->with('success', 'CitasasignadasLaboratorio updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $citasasignadasLaboratorio = CitasasignadasLaboratorio::find($id)->delete();

        $correo = new ContactanosMailable;
         Mail::to($request->user())->send($correo);

        return redirect()->route('citasasignadas-laboratorios.index')
            ->with('success', 'CitasasignadasLaboratorio deleted successfully');
    }
}
