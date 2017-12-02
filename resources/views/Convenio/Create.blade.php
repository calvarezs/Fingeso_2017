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
        <h1 class="text-center"> PROPUSTA DE CONVENIO AÑO  <?php echo date("Y"); ?></h1>
</div>
<hr />
</header>

<body>
  

<div class="container">
    <h3 class="text-center"> SEMESTRE 1 </h3>
      <div>
          <label> Curso a impartir </label>
          <select class="form-control" id="sel1">
            <option>Curso 1</option>
            <option>Curso 2</option>
          </select>
          <br>
          <label for="Horas"> Horas a dedicar</label>
          <input class="form-control" id="Horas" type="number">
          <br>
          <a href="#"  class="btn btn-primary"> Agregar</a>    
      </div> 
      <br>
      <div class="form-group"> 
                  <table class="table table-bordered table-striped">
                      <thead>
                        <th> N° </th>
                        <th> Curso</th>
                        <th> Horas a dedicar</th>
                        <th> Acción</th>
                      </thead>
                      <tbody> 
                      <td> 1 </td>
                      <td> Investigación</td>
                      <td> 100 </td>
                      <td> Eliminar</td>
                  </tbody>
                  </table>
      </div> 

      <div>  
          <label> Actividad administrativas </label>
          <select class="form-control" id="sel1">
          <option> Cargo 1</option>
          <option> Cargo 2</option>
          </select>
          <br>
          <label for="Horas"> Horas a dedicar</label>
          <input class="form-control" id="Horas" type="number">
          <br>
          <a href="#"  class="btn btn-primary"> Agregar</a>    
      </div> 
      <br>
      <div class="form-group"> 
          <table class="table table-bordered table-striped">
                      <thead>
                        <th> N° </th>
                        <th> Actividad administrativa </th>
                        <th> Horas a dedicar</th>
                        <th> Acción</th>
                      </thead>
                      <tbody> 
                      <td> 1 </td>
                      <td> Cargo 1</td>
                      <td> 100 </td>
                      <td> Eliminar</td>
                  </tbody>
                  </table>
      </div>   
</div> 

<hr />
<div class="container">
    <h3 class="text-center"> SEMESTRE 2 </h3>
      <div>
          <label> Curso a impartir </label>
          <select class="form-control" id="sel1">
            <option>Curso 1</option>
            <option>Curso 2</option>
          </select>
          <br>
          <label for="Horas"> Horas a dedicar</label>
          <input class="form-control" id="Horas" type="number">
          <br>
          <a href="#"  class="btn btn-primary"> Agregar</a>    
      </div> 
      <br>
      <div class="form-group"> 
                  <table class="table table-bordered table-striped">
                      <thead>
                        <th> N° </th>
                        <th> Curso</th>
                        <th> Horas a dedicar</th>
                        <th> Acción</th>
                      </thead>
                      <tbody> 
                      <td> 1 </td>
                      <td> Investigación</td>
                      <td> 100 </td>
                      <td> Eliminar</td>
                  </tbody>
                  </table>
      </div> 

      <div>  
          <label> Actividad administrativas </label>
          <select class="form-control" id="sel1">
          <option> Cargo 1</option>
          <option> Cargo 2</option>
          </select>
          <br>
          <label for="Horas"> Horas a dedicar</label>
          <input class="form-control" id="Horas" type="number">
          <br>
          <a href="#"  class="btn btn-primary"> Agregar</a>    
      </div> 
      <br>
      <div class="form-group"> 
          <table class="table table-bordered table-striped">
                      <thead>
                        <th> N° </th>
                        <th> Actividad administrativa </th>
                        <th> Horas a dedicar</th>
                        <th> Acción</th>
                      </thead>
                      <tbody> 
                      <td> 1 </td>
                      <td> Cargo 1</td>
                      <td> 100 </td>
                      <td> Eliminar</td>
                  </tbody>
                  </table>
      </div>   
</div>
<hr />
<div clas="text-center">
<a href="{{route('VerConvenio')}}"  class="btn btn-primary"> ENVIAR</a>
</div>

</body>
@endsection
