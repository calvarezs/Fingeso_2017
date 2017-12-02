<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SolicitudApelacion extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'solicitud_apelaciones';
    
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'carta_apelacion',
        'informacion',
        'apelacion_id',
        'academico_id',
        'comision_facultad_id'
    ];

    public function academicos()
    {
        return $this->belongsTo('App\Academico', 'academico_id');
    }

    public function comision_facultad()
    {
        return $this->belongsTo('App\ComisionFacultad', 'comision_facultad_id');
    }
}
