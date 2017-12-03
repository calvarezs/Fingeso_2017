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
                        <li><a href="{{ route('Convenio2')}}">Convenios</a></li>               
                    </ul></div>


</div>
<br>
 <div>
		<table class="table table-bordered table-striped">
			<thead>
				<th> N°</th>
				<th> Fecha </th>
				<th> Nombre Academico </th>
			</thead>

			<tbody>
			<tr> 

			
			<td> 1 </td>
			<td> 19/10/17</td>
			<td> Juan carlos </td>
	
			</tr>
			
			</tbody>

		</table>
</div>
</div>
</div>
		@endsection