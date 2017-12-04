@extends('layouts.app')

@section('content')

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
            <label for="detalles2">Detalles del convenio </label>
          <textarea class="form-control" name="detalles2" id ="detalles2" placeholder="Escribir actividad" rows="10"></textarea>
        </div> 
          
    </div>
<hr />
    <div class ="container">
     <center><input type="submit" name="procesar" class="btn btn-primary" value="Agregar"></center>
    </div>       
            
</form>
</body>
@endsection
