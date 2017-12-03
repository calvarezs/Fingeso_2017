<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\HistorialActividades;

class ActividadController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function Index(){ 
        return view ('Actividad.HomeActividades');
    }

    public function Historial()
    {
        $actividades=HistorialActividades::All(); 
        return view('Actividad.HistorialActividades',compact('actividades'));
    }

    public function Registrar(){
        return view ('Actividad.RegistrarActividad');
    }

    public function new_actividades(Request $i){
            
           return $i;
    }

    public function RegistrarNuevaActividad(request $data)
    {
        $actividad = new HistorialActividades();
        
        $actividad->id_usuario = 1;
        $actividad->titulo = $data->titulo;
        $actividad->detalles_actividad = $data->detalles;
        $actividad->tipo_actividad = $data->tipo;
        $actividad->ubicacion = $data->ubicacion;
        $actividad->fecha = $data->Fecha;
        $actividad->Hora = $data->hora; 
        $actividad->fecha_creacion = $data->documento_fecha;
        $actividad->autor_documento = $data->fname; 
        $actividad->fecha_creacion_video = $data->documento_fecha;
        $actividad->autor_video = $data->vname;
        $actividad->privacidad = $data->sel1;
        
        $actividad->save();
        return redirect()->route('HistorialActividad');
    }
}
