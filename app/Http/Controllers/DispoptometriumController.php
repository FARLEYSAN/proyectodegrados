<?php

namespace App\Http\Controllers;

use App\Models\Dispoptometrium;
use Illuminate\Http\Request;

/**
 * Class DispoptometriumController
 * @package App\Http\Controllers
 */
class DispoptometriumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dispoptometria = Dispoptometrium::paginate();

        return view('dispoptometrium.index', compact('dispoptometria'))
            ->with('i', (request()->input('page', 1) - 1) * $dispoptometria->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dispoptometrium = new Dispoptometrium();
        return view('dispoptometrium.create', compact('dispoptometrium'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Dispoptometrium::$rules);

        $dispoptometrium = Dispoptometrium::create($request->all());

        return redirect()->route('dispoptometria.index')
            ->with('success', 'Dispoptometrium created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dispoptometrium = Dispoptometrium::find($id);

        return view('dispoptometrium.show', compact('dispoptometrium'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dispoptometrium = Dispoptometrium::find($id);

        return view('dispoptometrium.edit', compact('dispoptometrium'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Dispoptometrium $dispoptometrium
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dispoptometrium $dispoptometrium)
    {
        request()->validate(Dispoptometrium::$rules);

        $dispoptometrium->update($request->all());

        return redirect()->route('dispoptometria.index')
            ->with('success', 'Dispoptometrium updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $dispoptometrium = Dispoptometrium::find($id)->delete();

        return redirect()->route('dispoptometria.index')
            ->with('success', 'Dispoptometrium deleted successfully');
    }
}
