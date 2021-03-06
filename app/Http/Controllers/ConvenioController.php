<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\ConvenioDesempeno;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;
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
        $convenios=ConvenioDesempeno::All();
        return view('Convenio.Profesor.HomeConvenio',compact('convenios'));
    }

    public function index2(){
        $convenios=ConvenioDesempeno::All();
        return view('Convenio.Director.HomeConvenio',compact('convenios'));
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

        if (!count($convenio))
        {
            return view ('Convenio.Profesor.Create');
        } 
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
        $convenios=ConvenioDesempeno::All();
        return view ('Convenio.Director.Historial',compact('convenios'));
    }
    public function detalles(Request $i){
        $inputs=Input::all();
        $idConvenio = $inputs['idConvenio']; 
        $convenio=ConvenioDesempeno::find($idConvenio);
        return view ('Convenio.Profesor.detalles', compact('convenio'));
    }
}
