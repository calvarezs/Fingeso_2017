@extends('layouts.app')

@section('content')
<div class ="container">

    <br>
 </div>

<div class="container">
        <h1 class="text-center"> APELACIONES </h1>
</div>
<hr />
</header>

<body>
  

<div class="container">
    <h3 class="text-center"> APELACIONES DISPONIBLE </h3> 
      <br>
      <div class="form-group"> 
                  <table class="table table-bordered table-striped">
                      <thead>
                       <th> N°</th>
                  <th> Fecha </th>
        <th> Nota Departamento  </th>
        <th> Nota Facultad </th>
        <th> Nota promedio </th>
                        <th> Acciones</th>
                      </thead>
                      <tbody> 
                      <td>  "" </td>
                      <td> "" </td>
                      <td >  " " </td>
                      <td>  " " </td>
                      <td >  " "</td> 
                      <td> <a href="{{route('DetallesConvenio')}}"  class="btn btn-primary"> Apelar</a> </td>

                  </tbody>
                  </table>
      </div> 
</div> 

<hr />
<div class="container">
    <h3 class="text-center"> ESTADO DE APELACIONES </h3>

      <br>
      <div class="form-group"> 
                  <table class="table table-bordered table-striped">
                      <thead>
                         <th> N°</th>
                  <th> Fecha </th>
        <th> Nota Departamento  </th>
        <th> Nota Facultad </th>
        <th> Nota promedio </th>
        <th> Nota Post Apelacion</th>
                        <th> Estado </th>
        
                      
                      </thead>
                      <tbody> 
                      <td>  "" </td>
                      <td>  "" </td>
                      <td>  ""  </td>
                       <td>  "" </td>
                      <td>  "" </td>
                      <td>  ""  </td>
        <td>  ""  </td>
                  </tbody>
                  </table>
      </div> 

      <br>
      
</div>

<hr />

</body>
@endsection
