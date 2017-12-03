@extends('layouts.app')

@section('content')

<div class ="container">
<div class="collapse navbar-collapse" id="app-navbar-collapse" style="background-color: #f08b24;">
     <div class="navbar-header">
            <a class="navbar-brand" href="#">Logotipo</a>
     </div>
     <div>  <ul class="nav navbar-nav" style="background-color: #ffff;">
                        &nbsp;
              </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{ route('DepartamentoEvaluaciones')}}">Evaluaciones</a></li>               
                    </ul></div>

</div>
 <br>

  <div class="jumbotron" align="center"  >
    <h1>EVALUACIONES POR REALIZAR</h1> 
    <p>  <a href="{{route('Edepartamento') }}" class="btn btn-primary"> VER </a> </p> 
  </div>
  
 <br>
 
  <div class="jumbotron " align="center">
    <h1>HISTORIAL DE EVALUACIONES</h1> 
    <p>  <a href="{{route('hDepartamento')}}"  class="btn btn-primary"> VER</a> </p> 
  </div>
</div>      

@endsection