@extends('layouts.app')

@section('content')

<div class ="container">



	<div class="collapse navbar-collapse" id="app-navbar-collapse" style="background-color: #f08b24;">
     <div class="navbar-header">
    
        <a class="navbar-brand" href="#">Logotipo</a>
     </div>
     <div>  <ul class="nav navbar-nav" style="background-color: #ffff;">
                        &nbsp;
              </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{ route('FacultadEvaluaciones')}}">Evaluaciones</a></li>               
                    </ul></div>

</div>
	   <div>
  			<h1 class="text-center"> Lista de Evaluaciones Realizadas</h1>
			
  		</div>
  		<hr />
  		<div >

</div>
<br>
 <div>
		<table class="table table-bordered table-striped">
			<thead>
				<th> N°</th>
				<th> Nombre Academico </th>
				<th> Departamento </th>
				<th> Puntaje Departamento </th>
				<th> Puntaje Facultad </th>
				<th> Puntaje Promedio </th>
				<th> Fecha </th>
			</thead>

			<tbody>
			<tr> 
			<td> 1 </td>
			<td> Juan carlos </td>
			<td> informatica </td>
			<td>   3,5</td>
			<td>   3,5</td>
			<td>   3,5</td>
			<td> 15/12/12</td>
			</tr>
			</tbody>

		</table>
</div>
</div>
</div>
		@endsection