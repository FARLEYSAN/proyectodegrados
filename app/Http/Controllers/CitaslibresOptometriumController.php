<?php

namespace App\Http\Controllers;

use App\Models\CitaslibresOptometrium;
use App\Models\CitasasignadasOptometrium;
use App\Models\CitasasignadasMedicina;
use Illuminate\Http\Request;
use App\Mail\ConfirmacionMailable;
use Illuminate\Support\Facades\Mail;
use App\Models\User;

/**
 * Class CitaslibresOptometriumController
 * @package App\Http\Controllers
 */
class CitaslibresOptometriumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $citaslibresOptometria = CitaslibresOptometrium::paginate(6);

        return view('citaslibres-optometrium.index', compact('citaslibresOptometria'))
            ->with('i', (request()->input('page', 1) - 1) * $citaslibresOptometria->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $citaslibresOptometrium = new CitaslibresOptometrium();
        return view('citaslibres-optometrium.create', compact('citaslibresOptometrium'));
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
        

        $citasasignadasOptometria = CitasasignadasOptometrium::create($request->all());

        

       return redirect()->route('citaslibres-optometria.index')
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
        $citaslibresOptometrium = CitaslibresOptometrium::find($id);

        return view('citaslibres-optometrium.show', compact('citaslibresOptometrium'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $citaslibresOptometrium = CitaslibresOptometrium::find($id);

        return view('citaslibres-optometrium.edit', compact('citaslibresOptometrium'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CitaslibresOptometrium $citaslibresOptometrium
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CitaslibresOptometrium $citaslibresOptometrium)
    {
        request()->validate(CitaslibresOptometrium::$rules);

        $citaslibresOptometrium->update($request->all());

        return redirect()->route('citaslibres-optometria.index')
            ->with('success', 'CitaslibresOptometrium updated successfully');
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
        
        $citaslibresOptometria = CitaslibresOptometrium::find($id)->delete();

        $correo = new ConfirmacionMailable;
        Mail::to($request->user())->send($correo);

        return view('confirmacion');
    }
}
