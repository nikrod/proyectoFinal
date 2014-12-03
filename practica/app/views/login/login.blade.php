@extends('layouts.master')

@section('titulo')
    UTEM - Pautas
@stop   

@section('content')


    
  

<div class="container" style="width: 400px;">

      <form class="form-signin" method="post" action="/" style="margin-top: 40px;">

        <h2 class="form-signin-heading" style="font-size:25px;">Inicio de sesión</h2>

        {{ Form::open(array('url' => 'login')) }}

@if (Session::has('login_errors'))
<span class="error">Usuario o contraseña incorrectas.</span>
@endif
<p> {{ Form::label('rut', 'Rut') }} </p>
<input class="form-control" placeholder="Rut" {{Form::text('rut') }} </p>

<p>{{ Form::label('password', 'Contraseña') }}</p>
 <input class="form-control" placeholder="Contrase&#xF1;a" {{ Form::password('password') }}</p>


<button class="btn btn-lg btn-primary btn-block" type="submit" style="margin-top: 10px;"><i class="fa fa-user fa-fw"></i>Iniciar sesión</button>


{{ Form::close() }}

 
      </form>

    </div>

    

<?php echo HTML::script('js/jquery.Rut.min.js'); ?>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $("#rut").Rut();
    });
</script>



@stop