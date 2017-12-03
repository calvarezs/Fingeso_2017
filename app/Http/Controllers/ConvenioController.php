<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\ConvenioDesempeno;
use Carbon\Carbon;
class ConvenioController extends Controller
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


    public function index()
    {
        return view('Convenio.Profesor.HomeConvenio');
    }

    public function index2(){
        return view('Convenio.Director.HomeConvenio');
    }

    public function create(){
          
        return view ('Convenio.Profesor.Create');
    }


    public function new_convenio(Request $data)
    {
        $convenio = new ConvenioDesempeno();
        $convenio->fecha_creacion = Carbon::now()->toDateString();
        $convenio->detalle_sem_1 = $data->detalles1;
        $convenio->detalle_sem_2 = $data->detalles2;
        $convenio->status = 'Rechazada'; 
        $convenio->director_id = 1;
        $convenio->comision_departamentos_id = 1;
        
        $convenio->save(); 
        return redirect()->route('historialConvenio');
    }

    public function revisar(){
            return view ('Convenio.Director.Revisar');
    }


    public function ver()
    {
        $convenio=ConvenioDesempeno::orderBy('fecha_creacion', 'desc')
        ->first(); 
        return view ('Convenio.Profesor.convenio',compact('convenio'));
    }
    
    public function validar(){
        return view ('Convenio.Director.Validar');          
    }

    public function historial(){
        $convenios=ConvenioDesempeno::All(); 
        return view ('Convenio.Profesor.historial',compact('convenios'));
    }

    public function historial2(){
            return view ('Convenio.Director.Historial');
    }
    public function detalles(){
            return view ('Convenio.Profesor.detalles');
    }
}
