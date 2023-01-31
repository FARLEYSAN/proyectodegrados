<?php

namespace App\Http\Controllers;

use App\Models\Dispodontologium;
use Illuminate\Http\Request;

/**
 * Class DispodontologiumController
 * @package App\Http\Controllers
 */
class DispodontologiumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dispodontologia = Dispodontologium::paginate();

        return view('dispodontologium.index', compact('dispodontologia'))
            ->with('i', (request()->input('page', 1) - 1) * $dispodontologia->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dispodontologium = new Dispodontologium();
        return view('dispodontologium.create', compact('dispodontologium'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Dispodontologium::$rules);

        $dispodontologium = Dispodontologium::create($request->all());

        return redirect()->route('dispodontologia.index')
            ->with('success', 'Dispodontologium created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dispodontologium = Dispodontologium::find($id);

        return view('dispodontologium.show', compact('dispodontologium'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dispodontologium = Dispodontologium::find($id);

        return view('dispodontologium.edit', compact('dispodontologium'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Dispodontologium $dispodontologium
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dispodontologium $dispodontologium)
    {
        request()->validate(Dispodontologium::$rules);

        $dispodontologium->update($request->all());

        return redirect()->route('dispodontologia.index')
            ->with('success', 'Dispodontologium updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $dispodontologium = Dispodontologium::find($id)->delete();

        return redirect()->route('dispodontologia.index')
            ->with('success', 'Dispodontologium deleted successfully');
    }
}
