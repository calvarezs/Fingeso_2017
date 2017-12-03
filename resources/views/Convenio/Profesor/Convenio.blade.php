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

  <div>
 
  </div>
<body>
  

<div class="container">
   <hr />
   <h2> Status: </h2> <h1> Rechazada</h1>   
    <hr />
    <h3 class="text-center"> SEMESTRE 1 </h3> 
      <br>
      <div class="form-group"> 
                  <table class="table table-bordered table-striped">
                      <thead>
                        <th> N° </th>
                        <th> Curso</th>
                        <th> Horas a dedicar</th>
                      </thead>
                      <tbody> 
                      <td> 1 </td>
                      <td> Investigación</td>
                      <td> 100 </td>
                  </tbody>
                  </table>
      </div> 
      <br>
      <div class="form-group"> 
          <table class="table table-bordered table-striped">
                      <thead>
                        <th> N° </th>
                        <th> Actividad administrativa </th>
                        <th> Horas a dedicar</th>
                        
                      </thead>
                      <tbody> 
                      <td> 1 </td>
                      <td> Cargo 1</td>
                      <td> 100 </td>
                  </tbody>
                  </table>
      </div>   
</div> 

<hr />
<div class="container">
    <h3 class="text-center"> SEMESTRE 2 </h3>

      <br>
      <div class="form-group"> 
                  <table class="table table-bordered table-striped">
                      <thead>
                        <th> N° </th>
                        <th> Curso</th>
                        <th> Horas a dedicar</th>
                      
                      </thead>
                      <tbody> 
                      <td> 1 </td>
                      <td> Investigación</td>
                      <td> 100 </td>
        
                  </tbody>
                  </table>
      </div> 

      <br>
      <div class="form-group"> 
          <table class="table table-bordered table-striped">
                      <thead>
                        <th> N° </th>
                        <th> Actividad administrativa </th>
                        <th> Horas a dedicar</th>
                  
                      </thead>
                      <tbody> 
                      <td> 1 </td>
                      <td> Cargo 1</td>
                      <td> 100 </td>
                      
                  </tbody>
                  </table>
      </div>   
</div>

<hr />
<div class="container">
    <h3 class="text-center"> COMENTARIOS </h3>
<div clas="text-center">
<a href="{{route('Convenio')}}"  class="btn btn-primary"> Agregar comentario</a>
</div>
      <br>
      <div class="form-group"> 
                  <table class="table table-bordered table-striped">
                      <thead>
                        <th> N° </th>
                         <th> FECHA </th>
                        <th> NOMBRE </th>
                        <th> COMENTARIO</th>
                      
                      </thead>
                      <tbody> 
                      <td> 1 </td>
                      <td> 12/13/18</td>
                      <td> Director Juan carlos </td>
                      <td> COMENTARIOS </td>
                  </tbody>
                  </table>
      </div>    
</div>
<hr />




</body>
@endsection
