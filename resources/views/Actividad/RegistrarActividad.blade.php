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
 </div>
 <div class="container">
        <h1 class="text-center"> Formulario de actividades </h1>

      </div>
      <hr />
  </header>
  <div class="container">
  <form>
    <h3 class="text-center"> Actividad </h3>
      <div class="form-group">
        <div class="col-md-12"> 
          <label for="titulo">Titulo</label>
          <input class="form-control" id="titulo" type="text">

        </div>
        <div class="col-md-12">
          <label for=" ctividad">Detalles de la actividad </label>
          <textarea class="form-control" id ="activida" placeholder="Escribir actividad" rows="10"></textarea>
        </div>
      </div>
      <div class="form-group">
        <div class="row">
          <div class="col-md-6 ">
            <label for="tipo">Tipo de actividad</label>
            <select class="form-control" name="" id="tipo">
            <option value="">Investigación</option>
            <option value="">Vinculación con el medio</option>
            <option value="">Academica</option>
            </select>
          </div>
          <div class="col-md-6">
            <label for="ubicacion"> Ubicación </label>
            <input class ="form-control" type="text" name="fname">
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="row">
          <div class="col-md-6 ">
            <label for="hora">Fecha </label>
            <input class="form-control" id="date" type="date">
          </div>
          <div class="col-md-6">
            <label for="Fecha"> Hora </label>
            <input class= "form-control" type="time">
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
                  <input class="form-control" id="date" type="date">
              </div>
              <div class="col-md-6">
                <label>Autor</label>
                <input class ="form-control" type="text" name="fname"><br>
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
                  <input class="form-control" id="date" type="date">
              </div>
              <div class="col-md-6">
                <label>Autor</label>
                <input class ="form-control" type="text" name="fname"><br>
              </div>
            </div>

  <hr/>

  <div class="form-group">
  <label for="sel1">Privacidad de la actividad</label>
  <select class="form-control" id="sel1">
    <option>Privado</option>
    <option>Publico</option>
  </select>
</div>
    <div class="col-md- 12 center-block">
      <a href="{{route('HistorialActividad')}}"  class="btn btn-primary"> INGRESAR</a>
    </div>
    <br></br>
  </div>   

@endsection
