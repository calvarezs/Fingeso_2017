@extends('layouts.app')

@section('content')

<div class ="container">

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