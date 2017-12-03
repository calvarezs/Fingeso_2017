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
                        <li><a href="{{ route('DepartamentoEvaluaciones')}}">Evaluaciones</a></li>               
                    </ul></div>

</div>
	   <div>
  			<h1 class="text-center"> Lista de Evaluaciones por Realizar</h1>
			
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
				<td> Acciones </th>
			</thead>

			<tbody>
			<tr> 

			
			<td> 1 </td>
			<td> Juan carlos </td>
			<td>  <a href="{{route('ADepartamento')}}"  class="btn btn-primary"> Evaluar</a> </td>
			</tr>
			
			</tbody>

		</table>
</div>
</div>
</div>
		@endsection