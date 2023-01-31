<?php

namespace App\Http\Controllers;

use App\Models\Asignadageneral;
use App\Models\Displaboratorio;
use App\Models\Disponible;
use Illuminate\Http\Request;

/**
 * Class AsignadageneralController
 * @package App\Http\Controllers
 */
class AsignadageneralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asignadagenerals = Asignadageneral::paginate();

        return view('asignadageneral.index', compact('asignadagenerals'))
            ->with('i', (request()->input('page', 1) - 1) * $asignadagenerals->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $asignadageneral = new Asignadageneral();
        return view('asignadageneral.create', compact('asignadageneral'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
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
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $asignadageneral = Asignadageneral::find($id);

        return view('asignadageneral.show', compact('asignadageneral'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $asignadageneral = Asignadageneral::find($id);

        return view('asignadageneral.edit', compact('asignadageneral'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Asignadageneral $asignadageneral
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Asignadageneral $asignadageneral)
    {
        request()->validate(Asignadageneral::$rules);

        $asignadageneral->update($request->all());

        return redirect()->route('asignadagenerals.index')
            ->with('success', 'Asignadageneral updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $asignadageneral = Asignadageneral::find($id)->delete();

        return redirect()->route('asignadagenerals.index')
            ->with('success', 'Asignadageneral deleted successfully');
    }
}
