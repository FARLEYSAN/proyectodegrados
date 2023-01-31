<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CitaslibresMedicina
 *
 * @property $id
 * @property $Servicio
 * @property $Nombre
 * @property $Fecha
 * @property $Hora
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CitaslibresMedicina extends Model
{
    
    static $rules = [
      'id' => 'required',
		'Servicio' => 'required',
		'Nombre' => 'required',
		'Fecha' => 'required',
		'Hora' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [ 'id','Servicio','Nombre','Fecha','Hora'];



}
