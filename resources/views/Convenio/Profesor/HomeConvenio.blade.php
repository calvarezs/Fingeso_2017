@extends('layouts.app')

@section('content')

<div class ="container">

 <br>
  <div class="jumbotron" align="center"  >
    <h1>CONVENIO ACTUAL</h1>  
    <p> <a href="{{ route('VerConvenio') }}" class="btn btn-primary">VER   ACTUAL</a> </p> 
    <p> <a href="{{ route('CreateConvenio') }}"  class="btn btn-primary">CREAR NUEVO</a> </p> 
  </div>
               
 <br>
  <div class="jumbotron " align="center">
    <h1>HISTORIAL DE CONVENIOS</h1> 

    <p>  <a href="{{ route('historialConvenio') }}"  class="btn btn-primary"> VER HISTORIAL</a> </p> 
  </div>
</div>      

@endsection