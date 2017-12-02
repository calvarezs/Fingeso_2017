@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                   <div class="collapse navbar-
                   collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <li><a>Departamentos</a></li>
                        <li><a>Docentes </a></li>
                        <li><a>Convenios</a></li>
                        <li><a>Evaluaciones</a></li>
                      
                    </ul>
                </div>
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <table class="responsive">
                        <tr>
                            <td>    ID      </td>
                            <td>    Nombre  </td>
                            <td>    Apellido  </td>
                            <td>    Email   </td>
                            <td>    Fono  </td>
                      
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection