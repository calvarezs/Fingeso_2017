@extends('layouts.app')

@section('content')

<div class ="container">
<div class="collapse navbar-collapse" id="app-navbar-collapse" style="background-color: #f08b24;">
     <div class="navbar-header">
            <a class="navbar-brand" href="#">Logotipo</a>
     </div>
    
                <ul class="nav navbar-nav" style="background-color: #ffff;">
                        &nbsp;
                </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{ route('Actividades') }}">Actividades</a></li>
                        <li><a href="{{ route('Convenio') }}">Convenios</a></li>
                        <li><a href="{{ route('Evaluaciones') }}">Evaluaciones</a></li>               
                    </ul>
                </div>
 <br>
  <div class="jumbotron" align="center"  >
    <h1>CONVENIO ACTUAL</h1> 
    <p>  <a href="{{ route('VerConvenio') }}" class="btn btn-primary"> VER </a> </p> 
     <p> o que aparezca crear si no existe </p>

     <p>  <a href="{{ route('CreateConvenio') }}"  class="btn btn-primary"> CREAR</a> </p> 
  </div>
               
 <br>
  <div class="jumbotron " align="center">
    <h1>HISTORIAL DE CONVENIOS</h1> 

    <p>  <a href="{{ route('historialConvenio') }}"  class="btn btn-primary"> VER</a> </p> 
  </div>
</div>      

@endsection