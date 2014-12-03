<!DOCTYPE html>
<html lang="en">
<head>
	
	@include('include.styles')

	<title>
     @section('titulo')
     UTEM
     @show
	</title>

  <?php echo HTML::script('js/jquery-1.11.1.min.js'); ?>
  <?php echo HTML::script('js/jquery.Rut.min.js'); ?>
  

</head>

<body style="background-color:#2E64FE;">
 

<nav class="navbar navbar-fixed-top navbar-inverse" role="navigation"  >
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="./">Administrador de Pautas y Tareas</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="./">Inicio</a></li>

          </ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </nav>
    <br>
<br>


@section('content')

   
     @show


	<br>
	<br>
	<div class="container">
    </div>
</body>
</html>
