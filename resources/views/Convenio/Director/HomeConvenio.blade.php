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
                        <li><a href="{{ route('Convenio2')}}">Convenios</a></li>               
                    </ul></div>

</div>
 <br>

  <div class="jumbotron" align="center"  >
    <h1>CONVENIOS POR VALIDAR</h1> 
    <p>  <a href="{{route('RevisarConvenio') }}" class="btn btn-primary"> VER </a> </p> 
  </div>
  
 <br>
 
  <div class="jumbotron " align="center">
    <h1>HISTORIAL DE CONVENIOS</h1> 

    <p>  <a href="{{ route('DhistorialConvenio') }}"  class="btn btn-primary"> VER</a> </p> 
  </div>
</div>      

@endsection