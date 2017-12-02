<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'actividades';
    
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fecha',
        'lugar',
        'descripcion',
        'academico_id',
        'informe_actividades_id',
        'convenio_desempeño_id'
    ];

    public function academicos()
    {
        return $this->belongsTo('App\Academico', 'academico_id');
    }

    public function informe_actividades()
    {
        return $this->belongsTo('App\InformeActividad', 'informe_actividades_id');
    }

    public function convenio_desempeño()
    {
        return $this->belongsTo('App\ConvenioDesempeño', 'convenio_desempeño_id');
    }
}
