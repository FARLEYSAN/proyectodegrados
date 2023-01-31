<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CitasasignadasLaboratorio
 *
 * @property $id
 * @property $Servicio
 * @property $Nombre
 * @property $Fecha
 * @property $Hora
 * @property $Paciente
 * @property $Cedula
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CitasasignadasLaboratorio extends Model
{
    
    static $rules = [
      'id' => 'required',
		'Servicio' => 'required',
		'Nombre' => 'required',
		'Fecha' => 'required',
		'Hora' => 'required',
		'Paciente' => 'required',
		'Cedula' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id','Servicio','Nombre','Fecha','Hora','Paciente','Cedula'];



}
