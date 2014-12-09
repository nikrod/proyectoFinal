@extends('layouts.master')

@section('titulo')
    UTEM - Archivo
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

@section('content')
<center>
<div id="wrapper">
      <div class="container" style="width: 400px";>
    <br>
    <br>
    <br>

<div class="panel panel-default" style="margin-top: 40px;">
<div class="panel-heading">
<h2 class="form-signin-heading" style="font-size:25px;">Agregar Archivo</h2>
</div>
<div class="panel-body">  
 <?php $_GET['asig']; ?> 
  <form role="form" action="/Archivo/add/{{$_GET['asig']}}" enctype="multipart/form-data" method="post" id="formulario">
  <div class="form-group">
    <label for="exampleInputEmail1">Descripcion</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Ingrese una descripción " name="nombre" required>
    
    

  </div>
<div class="form-group">
<input type="file" class="form-control" id="exampleInputEmail1" placeholder="Ingrese archivo" name="archivo" required>
</div> 

              <button type="submit" class="btn btn-primary">Guardar Cambios <i class="fa fa-floppy-o"></i>
      </form>

      </div>
    </div>
    </div>
    </div>
</center>

@stop

    
