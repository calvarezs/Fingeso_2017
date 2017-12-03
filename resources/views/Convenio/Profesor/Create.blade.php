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
  <form class="form-horizontal" method="POST" action="{{ route('newConvenio') }}">
        {{ csrf_field() }}


    <div class="container">
    <h3 class="text-center"> SEMESTRE 1 </h3>
      <div>
            <label for="detalles">Detalle del convenio</label>
          <textarea class="form-control" name="detalles1" id ="detalles" placeholder="Escribir actividad" rows="10"></textarea>
        </div> 
          
    </div> 
 

<hr />

 <div class="container">
    <h3 class="text-center"> SEMESTRE 2 </h3>
      <div>
            <label for="detalles">Detalles del convenio </label>
          <textarea class="form-control" name="detalles2" id ="detalles" placeholder="Escribir actividad" rows="10"></textarea>
        </div> 
          
    </div>
<hr />
    <div class ="container">
     <center><input type="submit" name="procesar" class="btn btn-primary" value="Agregar"></center>
    </div>       
            
</form>
</body>
@endsection
