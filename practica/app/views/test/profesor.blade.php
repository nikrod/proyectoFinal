@extends('layouts.master')

@section('titulo')
    UTEM - Profesor
@stop   

@section('content')
<center>
<div class="container" style="width: 400px;">

      <form class="form-signin" method="post" action="login" style="margin-top: 40px;">

        <h2 class="form-signin-heading" style="font-size:25px;">Inicio de sesión</h2>

                            <b>Introduzca usuario y contraseña para continuar.</b>
        
        <input name="username" type="text" class="form-control" placeholder="nombre de usuario" style="margin-top:10px;">
        <input name="password" type="password" class="form-control" placeholder="Contraseña" style="margin-top: 10px;">
        <button class="btn btn-lg btn-primary btn-block" type="submit" style="margin-top: 10px;"><i class="fa fa-user fa-fw"></i>Iniciar sesión</button>
      </form>

    </div>


 
</center>


@stop