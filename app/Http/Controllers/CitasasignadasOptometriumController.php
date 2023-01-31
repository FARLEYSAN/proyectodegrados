<?php

namespace App\Http\Controllers;

use App\Models\CitasasignadasOptometrium;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;
use App\Models\User;

/**
 * Class CitasasignadasOptometriumController
 * @package App\Http\Controllers
 */
class CitasasignadasOptometriumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $citasasignadasOptometria = CitasasignadasOptometrium::paginate();

        return view('citasasignadas-optometrium.index', compact('citasasignadasOptometria'))
            ->with('i', (request()->input('page', 1) - 1) * $citasasignadasOptometria->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $citasasignadasOptometrium = new CitasasignadasOptometrium();
        return view('citasasignadas-optometrium.create', compact('citasasignadasOptometrium'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CitasasignadasOptometrium::$rules);

        $citasasignadasOptometrium = CitasasignadasOptometrium::create($request->all());

        return redirect()->route('citasasignadas-optometria.index')
            ->with('success', 'CitasasignadasOptometrium created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $citasasignadasOptometrium = CitasasignadasOptometrium::find($id);

        return view('citasasignadas-optometrium.show', compact('citasasignadasOptometrium'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $citasasignadasOptometrium = CitasasignadasOptometrium::find($id);

        return view('citasasignadas-optometrium.edit', compact('citasasignadasOptometrium'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CitasasignadasOptometrium $citasasignadasOptometrium
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CitasasignadasOptometrium $citasasignadasOptometrium)
    {
        request()->validate(CitasasignadasOptometrium::$rules);

        $citasasignadasOptometrium->update($request->all());

        return redirect()->route('citasasignadas-optometria.index')
            ->with('success', 'CitasasignadasOptometrium updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $citasasignadasOptometrium = CitasasignadasOptometrium::find($id)->delete();

        $correo = new ContactanosMailable;
         Mail::to($request->user())->send($correo);

        return redirect()->route('citasasignadas-optometria.index')
            ->with('success', 'CitasasignadasOptometrium deleted successfully');
    }
}
