<?php

namespace App\Http\Controllers;

use App\Models\CitasasignadasMedicina;
use App\Models\Descargar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DescargarController extends Controller
{

    public function index()
    {
        $citasasignadasMedicinas = CitasasignadasMedicina::paginate();

        return view('citasasignadas-medicina.index', compact('citasasignadasMedicinas'))
            ->with('i', (request()->input('page', 1) - 1) * $citasasignadasMedicinas->perPage());
    }

   
}
