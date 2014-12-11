@extends('layouts.master')

@section('titulo')
    UTEM - Pautas
@stop   

@section('content')


    
  

<div class="container" style="width: 400px;">

      <form class="form-signin" method="post" action="login" style="margin-top: 40px;">

        <h2 class="form-signin-heading" style="font-size:25px;">Inicio de sesión</h2>

        @if (Session::has('login_errors'))
                    <b class="text-danger" >Rut o la contraseña no son correctos.</b>
        @else
                    <b>Introduzca Rut y contraseña para continuar.</b>
        @endif

        <input name="username" type="text" class="form-control" placeholder="Rut" style="margin-top:10px;">
        <input name="password" type="password" class="form-control" placeholder="Contrase&#xF1;a" style="margin-top: 10px;">
        <button class="btn btn-lg btn-primary btn-block" type="submit" style="margin-top: 10px;"><i class="fa fa-user fa-fw"></i>Iniciar sesión</button>
      </form>

    </div>

    




@stop