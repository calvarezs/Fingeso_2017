@extends('layouts.app')

@section('content')

<div class ="container">

 <br>
 </div>
 <div class="container">
        <h1 class="text-center"> Formulario de actividades </h1>

      </div>
      <hr />
  </header>
  <div class="container">

    <h3 class="text-center"> Actividad </h3>

<form class="form-horizontal" method="POST" action="{{ route('NewActividades') }}">
        {{ csrf_field() }}
  
        
      <div class="form-group">
        <div class="col-md-12"> 
            <label for="titulo">Titulo</label>
            <input class="form-control" name ="titulo" id="titulo" type="text">
        </div>

        <div class="col-md-12">
          <label for="detalles">Detalles de la actividad </label>
          <textarea class="form-control" name="detalles" id ="detalles" placeholder="Escribir actividad" rows="10"></textarea>
        </div>
    
      </div>


      <div class="form-group">
        <div class="row">
          <div class="col-md-6 ">
            <label for="Tipo">Tipo de actividad</label>
            <select class="form-control" name="Tipo" id="tipo">
            <option >Investigación</option>
            <option >Vinculación con el medio</option>
            <option >Academica</option>
            </select>
          </div>
          <div class="col-md-6">
            <label for="ubicacion"> Ubicación </label>
            <input class ="form-control" type="text" name="Ubicacion">
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="row">
          <div class="col-md-6 ">
            <label for="Fecha"> Fecha </label>
            <input class="form-control" id="Fecha" name ="Fecha" type="date">


          </div>
          <div class="col-md-6">
            <label for="hora"> Hora </label>
            <input class= "form-control" id="hora" name="hora" type="time">
          </div>
        </div>
      </div>

  <hr />
  
  
      <h3 class="text-center">Documento</h3>
          <div class="form-group">
              <label for="documento">Subir documento</label>
              <input type="file" id="documento">
          </div>


          <div class="form-group">
            <div class="row">
              <div class="col-md-6 ">
                <label for="documento_fecha">Fecha creación</label>
                  <input id="documento_fecha" type="date">
              </div>
              <div class="col-md-6">
                <label>Autor</label>
                <input class  type="text"><br>
              </div>
            </div>
          </div>

  <hr />

    <h3 class="text-center">Video</h3> 
          <div class="form-group">
              <label for="documento">Subir Video</label>
              <input type="file" id="documento">
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-md-6 ">
                <label for="documento_fecha">Fecha creación</label>
                  <input  id="documento_fecha" type="date">
              </div>
              <div class="col-md-6">
                <label>Autor</label>
                <input  type="text" ><br>
              </div>
            </div>

  <hr/>

  <div class="form-group">
  <label for="privacidad">Privacidad de la actividad</label>
  <select class="form-control" name="privacidad" id="privacidad">

    <option>Privado</option>
    <option>Publico</option>
  </select>
</div>
    <div class>
     <center><input type="submit" name="procesar" class="btn btn-primary" value="Agregar"></center>
       </div>       
            </form>

    <br></br>
 
  </div>   

@endsection
