<!DOCTYPE html>
<html lang="en">
<head>
  <title>
  @section('titulo')
  Pautas y Tareas  
  @show
  </title>
  @include('include.styles')


  <?php echo HTML::script('js/jquery-1.11.1.min.js'); ?>
  <?php echo HTML::script('js/jquery.Rut.min.js'); ?>
  
  <script>

  $( "#target" ).scroll(function() {
  $( "#log" ).append( "<div>Handler for .scroll() called.</div>" );
});
  </script>

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
          <a class="navbar-brand" href="./">Administración de Evaluaciones UTEM</a>
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



 <div class="container">
  
  @yield('content')
            <!-- /.row -->
 </div>


@section('footer')

<div class="container">
  <footer>© Administrador de Pautas y Tareas UTEM - 2014</footer>
    </div>
 @show   

</body>
</html>
