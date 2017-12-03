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
                        <th> N° </th>
                        <th> Fecha Evaluacion</th>
                
                        <th> Acciones</th>
                      </thead>
                      <tbody> 
                      <td> 1 </td>
                      <td> 14/03/2017</td>
                      <td> <a href="{{route('DetallesConvenio')}}"  class="btn btn-primary"> Apelar</a>
                       <a href="{{route('DetallesConvenio')}}"  class="btn btn-primary"> Detalles</a> </td>

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
                        <th> N° </th>
                        <th> Fecha Evaluacion </th>
                        <th> Estado </th>

                      
                      </thead>
                      <tbody> 
                      <td> N° </td>
                      <td> 17/01/12</td>
                      <td> En Evaluacion </td>
        
                  </tbody>
                  </table>
      </div> 

      <br>
      
</div>

<hr />

</body>
@endsection
