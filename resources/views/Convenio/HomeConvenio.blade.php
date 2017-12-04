@extends('layouts.app')

@section('content')

<div class ="container">

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