<?php

namespace App\Http\Controllers;

use App\Models\CitasasignadasMedicina;
use App\Models\CitasasignadasLaboratorio;
use App\Models\CitaslibresMedicina;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;
use App\Models\User;

/**
 * Class CitasasignadasMedicinaController
 * @package App\Http\Controllers
 */
class CitasasignadasMedicinaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
     $buscar=$request->get('buscar');

      $citasasignadasMedicinas=DB::table('citasasignadas_medicinas')
     
     ->select('*')
     
     ->where('Cedula', '=', $buscar)
     
     ->paginate(4);
     
     return view('citasasignadas-medicina.index', compact('citasasignadasMedicinas','buscar'));

    }
     

    /* $buscar=trim($request->get('buscar'));

     /* $citasasignadasLaboratorios=DB::table('citasasignadas_laboratorios')
     ->select('id', 'Servicio', 'Nombre', 'Fecha', 'Hora', 'Paciente', 'Cedula')
     ->where('Cedula', '=', $buscar)
     ->orderBy('Cedula','asc')
     ->paginate(7);
     return view('citasasignadas-medicina.index', compact('citasasignadasLaboratorios','buscar'));
*/

    




     /*$citasasignadasMedicinas= citasasignadas_medicinas::join('citasasignadas_laboratorios', 'citasasignadas_medicinas.Cedula', '=', 'citasasignadas_laboratorios.Cedula')

     
     ->select()
     ->where('Cedula', '=', $buscar)
     ->orderBy('Cedula','asc')
     ->get()
     ->paginate(7);

     return view('citasasignadas-medicina.index', compact('citasasignadasMedicinas','buscar'));

     
     







     //$citasasignadasMedicinas=CitasasignadasMedicina::where('Cedula', '=')->paginate();
    // return view ('citasasignadas-medicina.index', compact('citasasignadasMedicinas','buscar'));





    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $citasasignadasMedicina = new CitasasignadasMedicina();
        return view('citasasignadas-medicina.create', compact('citasasignadasMedicina'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CitasasignadasMedicina::$rules);

        $citasasignadasMedicina = CitasasignadasMedicina::create($request->all());
        $this->destroy($id);

        return redirect()->route('citasasignadas-medicinas.index')
            ->with('success', 'CitasasignadasMedicina created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $citasasignadasMedicina = CitasasignadasMedicina::find($id);

        return view('citasasignadas-medicina.show', compact('citasasignadasMedicina'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $citasasignadasMedicina = CitasasignadasMedicina::find($id);

        return view('citasasignadas-medicina.edit', compact('citasasignadasMedicina'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CitasasignadasMedicina $citasasignadasMedicina
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CitasasignadasMedicina $citasasignadasMedicina)
    {
        request()->validate(CitasasignadasMedicina::$rules);

        $citasasignadasMedicina->update($request->all());

        return redirect()->route('citasasignadas-medicinas.index')
            ->with('success', 'CitasasignadasMedicina updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id, Request $request)
    {
        $citasasignadasMedicina = CitasasignadasMedicina::find($id)->delete();
        
        $correo = new ContactanosMailable;
         Mail::to($request->user())->send($correo);



        return redirect()->route('cancelacion');
            
    }
}
