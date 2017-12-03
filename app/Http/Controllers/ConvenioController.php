<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
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

    public function revisar(){
            return view ('Convenio.Director.Revisar');
    }


    public function ver(){
            return view ('Convenio.Profesor.convenio');
    }
    
    public function validar(){
        return view ('Convenio.Director.Validar');          
    }

    public function historial(){
            return view ('Convenio.Profesor.historial');
    }

    public function historial2(){
            return view ('Convenio.Director.Historial');
    }
    public function detalles(){
            return view ('Convenio.Profesor.detalles');
    }
}
