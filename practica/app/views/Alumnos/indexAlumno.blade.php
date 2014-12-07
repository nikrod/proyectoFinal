@extends('layouts.master')

@section('titulo')
    UTEM - Bienvenido
@stop 

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
          <a class="navbar-brand" href="./">Administrador de Pautas y Tareas UTEM</a>
        </div>

      </div><!-- /.container -->
    </nav>
  </div>
  
@stop

@section('content')

<div class="panel panel-default" style="margin-top: 40px;">
                        <div class="panel-heading">
                            
                            <h2><b>Bienvenido Alumno </b><i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i></h2> 

                        </div>
                        <div class="panel-body">                  
                  
                        <div class="row">
                          <div class="col-sm-3">
                            <div class="list-group">
  <a href="#" class="list-group-item active">
    Asignaturas <i class="glyphicon glyphicon-pencil" aria-hidden="true"></i>
  </a>
  <a href="#" class="list-group-item" data-target-id="Primer Año">Primer Año</a>
  <a href="#" class="list-group-item" data-target-id="Segundo Año">Segundo Año</a>
  <a href="#" class="list-group-item" data-target-id="Tercer Año">Tercer Año</a>
  <a href="#" class="list-group-item" data-target-id="Cuarto Año">Cuarto Año</a>
    <a href="#" class="list-group-item" data-target-id="Quinto Año">Quinto Año</a>
      <a href="#" class="list-group-item" data-target-id="Sexto Año">Sexto Año</a>
</div>
</div>

 <div class="col-sm-9">
   <p>                    
                          <b>Aquí podrá visualizar pautas y pruebas de sus asignaturas.</b>                                
                        </p>
                        <div class="bs-docs-section">                
<div class="panel panel-default">
<div class="panel-body">
  <div class="form-group">
   <p>Informática 2014<p>
   
  </div>

                    
</div>
</div>
</div>

                    
</div>
 </div>
                            </div>

                        </div>
                    

                 

@stop
@section('footer')

<div class="container" style="margin-top: 65px;">
  <footer>© Administrador de Pautas y Tareas UTEM - 2014</footer>
    </div>
 @stop