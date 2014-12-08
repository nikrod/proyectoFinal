@extends('layouts.master')

@section('titulo')
    UTEM - Alumno
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
          <a class="navbar-brand" href="/login">Administración de Evaluaciones UTEM</a>
        </div>

      </div><!-- /.container -->
    </nav>
  </div>
  
@stop

@section('content')
<center>
<div id="wrapper">
      <div class="container" style="width: 400px";>
    <br>
    <br>
    <br>

<div class="panel panel-default" style="margin-top: 40px;">
<div class="panel-heading">
<h2 class="form-signin-heading" style="font-size:25px;">Agregar Alumno</h2>
</div>
<div class="panel-body">  
    <form class="form-signin" method="post" action="{{ URL::route('alumnos.store') }}">
    <input name="nombres" type="text" class="form-control" placeholder="Nombres" required>
    <input name="apellidos" type="text" class="form-control" placeholder="Apellidos" required>
    <input name="rut" type="text" class="form-control" placeholder="Rut" id="rut" required>
    <input name="carrera" type="text" class="form-control" placeholder="Código de Carrera" required>
    <br>
    <button type="submit" class="btn btn-primary">Guardar Cambios <i class="fa fa-floppy-o"></i>
    </form>
      <script src="http://localhost:8000/js/jquery.Rut.min.js"></script>
      <script type="text/javascript">
      jQuery(document).ready(function($) {
        $("#rut").Rut();
       });
      </script>
      </div>
    </div>
    </div>
    </div>
</center>
@stop