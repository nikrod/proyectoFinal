@extends('layouts.master')

@section('titulo')
    UTEM - Pautas
@stop   

@section('content')


    
  

<div class="container" style="width: 400px;">

      <form class="form-signin" method="post" action="/" style="margin-top: 40px;">

        <h2 class="form-signin-heading" style="font-size:25px;">Inicio de sesión</h2>

        @if (Session::has('login_errors'))
                    <b class="text-danger" >Rut o la contraseña no son correctos.</b>
        @else
                    <b>Introduzca Rut y contraseña para continuar.</b>
        @endif

        <input name="rut" type="text" class="form-control" placeholder="rut" id="rut" style="margin-top:10px;">
        <input name="password" type="password" class="form-control" placeholder="Contrase&#xF1;a" style="margin-top: 10px;">
        <button class="btn btn-lg btn-primary btn-block" type="submit" style="margin-top: 10px;"><i class="fa fa-user fa-fw"></i>Iniciar sesión</button>
      </form>
      <script src="http://localhost:8000/js/jquery.Rut.min.js"></script>
      <script type="text/javascript">
      jQuery(document).ready(function($) {
        $("#rut").Rut();
       });
      </script>
    


</div>














@stop