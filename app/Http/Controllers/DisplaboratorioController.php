<?php

namespace App\Http\Controllers;

use App\Models\Displaboratorio;
use Illuminate\Http\Request;

/**
 * Class DisplaboratorioController
 * @package App\Http\Controllers
 */
class DisplaboratorioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $displaboratorios = Displaboratorio::paginate();

        return view('displaboratorio.index', compact('displaboratorios'))
            ->with('i', (request()->input('page', 1) - 1) * $displaboratorios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $displaboratorio = new Displaboratorio();
        return view('displaboratorio.create', compact('displaboratorio'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Displaboratorio::$rules);

        $displaboratorio = Displaboratorio::create($request->all());

        return redirect()->route('displaboratorios.index')
            ->with('success', 'Displaboratorio created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $displaboratorio = Displaboratorio::find($id);

        return view('displaboratorio.show', compact('displaboratorio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $displaboratorio = Displaboratorio::find($id);

        return view('displaboratorio.edit', compact('displaboratorio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Displaboratorio $displaboratorio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Displaboratorio $displaboratorio)
    {
        request()->validate(Displaboratorio::$rules);

        $displaboratorio->update($request->all());

        return redirect()->route('displaboratorios.index')
            ->with('success', 'Displaboratorio updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $displaboratorio = Displaboratorio::find($id)->delete();

        return redirect()->route('displaboratorios.index')
            ->with('success', 'Displaboratorio deleted successfully');
    }
}
