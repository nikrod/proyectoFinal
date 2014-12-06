@extends('layouts.master')

@section('titulo')
    UTEM - Iniciar Sesión
@stop 

@section('content')

<div id="wrapper">
      <div class="container" style="width: 400px;">

      <form class="form-signin" method="post" action="/" style="margin-top: 120px;">

        <h2 class="form-signin-heading" style="font-size:25px;">Inicio de sesión</h2>

        <input name="rut" type="text" class="form-control" placeholder="Rut" id="rut" style="margin-top:10px;">
        <input name="password" type="password" class="form-control" placeholder="Contrase&#xF1;a" style="margin-top: 10px;">


        @if (Session::has('login_errors'))
                    <b class="text-danger" ><big>Usuario o contraseña incorrecto/a.</big></b>
        @endif

        <button class="btn btn-lg btn-primary btn-block" type="submit" style="margin-top: 10px;"><i class="fa fa-user fa-fw"></i>Iniciar sesión</button>
      </form>
      <script src="http://localhost:8000/js/jquery.Rut.min.js"></script>
      <script type="text/javascript">
      jQuery(document).ready(function($) {
        $("#rut").Rut();
       });
      </script>
     </div>
  </div>

@stop

@section('footer')

<div class="container" style="margin-top: 259px;">
  <footer>© Administrador de Pautas y Tareas UTEM - 2014</footer>
    </div>
 @stop