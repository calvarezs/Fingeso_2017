@extends('layouts.app')

@section('content')
<div class ="container">

<br>


<div class="container">
        <h1 class="text-center"> PROPUSTA DE CONVENIO AÑO  <?php echo date("Y"); ?></h1>
        
        <a href="{{route('Convenio')}}"  class="btn btn-primary"> Validar </a>

          <a href="{{route('Convenio')}}"  class="btn btn-primary"> Rechazar </a>
</div>
<hr />
</header>

<body>


  <div>
  <label> Academico: Juan Carlos </label>
  </div>

<div class="container">
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
