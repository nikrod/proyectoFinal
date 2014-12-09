@if(Auth::check())
<!DOCTYPE html>
<html lang="en">
<head>
  <title>
  @section('titulo')
  Pautas y Tareas  
  @show
  </title>
   @include('include.styles')
   </head>
   <body>

@section('sidebar')

<div id="wrapper">
<nav class="navbar navbar-fixed-top navbar-inverse" role="navigation"  >
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/Profesor">Administración de Evaluaciones UTEM</a>
        </div>

                            <ul class="nav navbar-nav navbar-right">
                            <?php 
                            if(Auth::check()) {
                                ?>                                
                               <?php if (Request::is('logout')) { echo 'class="active"'; } ?><a href="/logout"><button type="button" class="btn btn-primary navbar-btn"><i class="glyphicon glyphicon-user" aria-hidden="true"></i>Cerrar Sesión</button></a>
                            <?php
                            } else {
                                ?>
                                <li <?php if (Request::is('login')) { echo 'class="active"'; } ?>><a href="login">Login</a></li>
                                <?php
                            }
                            ?>
                        </ul>
                     
                       
                  
        

      </div><!-- /.container -->
    </nav>
  </div>

  
@show
<div id="wrapper">
                          <div class="container">
                        <div class="panel panel-default" style="margin-top: 40px;">
                        <div class="panel-heading">
                            
                            <h2><b>Bienvenido Profesor  </b><i class="glyphicon glyphicon-folder-open" aria-hidden="true"> </i></h2> 

                        </div>
                        <div class="panel-body">
                          <div class="row">
                          <div class="col-sm-3">
                               <div class="list-group">
  <a class="list-group-item active">
    Asignaturas <i class="glyphicon glyphicon-pencil" aria-hidden="true"></i>
  </a>
  <a href="/Asignaturas/primero" class="list-group-item" data-target-id="Primer Año">Primer Año</a>
  <a href="/Asignaturas/segundo" class="list-group-item" data-target-id="Segundo Año">Segundo Año</a>
  <a href="/Asignaturas/tercero" class="list-group-item" data-target-id="Tercer Año">Tercer Año</a>
  <a href="/Asignaturas/cuarto" class="list-group-item" data-target-id="Cuarto Año">Cuarto Año</a>
    <a href="/Asignaturas/quinto" class="list-group-item" data-target-id="Quinto Año">Quinto Año</a>
      <a href="/Asignaturas/sexto" class="list-group-item" data-target-id="Sexto Año">Sexto Año</a>
</div>

</div>

 <div class="container">
  
  @yield('content')
            <!-- /.row -->
 </div>
  </div>
   </div>



@section('footer')

<div class="container">
  <footer>© Administrador de Pautas y Tareas UTEM - 2014</footer>
    </div>


 @show

    @endif
 </body>
</html>
