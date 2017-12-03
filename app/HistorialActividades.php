<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HistorialActividades extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'historial_actividades';
    
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_usuario',
        'titulo',
        'detalles_actividad',
        'tipo_actividad',
        'ubicacion',
        'fecha',
        'Hora',
        'documento',
        'fecha_creacion',
        'autor_documento',
        'video',
        'fecha_creacion_video',
        'autor_video',
        'privacidad'
    ]; 
}
