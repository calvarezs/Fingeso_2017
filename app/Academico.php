<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Academico extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'academicos';

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 
        'rut',
        'correo',
        'directores_id',
        'id_user'
    ];

    public function solicitud_apelaciones()
    {
        return $this->hasMany('App\SolicitudApelacion', 'academico_id');
    }

    public function acta_precalificacion()
    {
        return $this->hasMany('App\ActaPrecalificacion', 'academico_id');
    }
        
    public function acta_calificacion()
    {
        return $this->hasMany('App\ActaCalificacion', 'academico_id');
    } 

    public function informe_actividades()
    {
        return $this->hasMany('App\InformeActividad', 'academico_id');
    }
            
    public function actividades()
    {
        return $this->hasMany('App\Actividad', 'academico_id');
    } 
        
    public function directores()
    {
        return $this->belongsTo('App\Director', 'directores_id');
    }

}
