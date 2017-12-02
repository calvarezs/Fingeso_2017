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
        return view('Convenio.HomeConvenio');
    }

    public function create(){
          
            return view ('Convenio.Create');
    }
    public function ver(){
            return view ('Convenio.convenio');
    }
    public function historial(){
            return view ('Convenio.historial');
    }
    public function detalles(){
            return view ('Convenio.detalles');
    }
}
