<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComisionFacultad extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'comision_facultad';
    
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre',
        'correo',
        'decano',
        'id_user'
    ];

    public function acta_calificacion()
    {
        return $this->hasMany('App\ActaCalificacion', 'comision_facultad_id');
    
    }

    public function solicitud_apelaciones()
    {
        return $this->hasMany('App\SolicitudApelacion', 'comision_facultad_id');
    }  
}
