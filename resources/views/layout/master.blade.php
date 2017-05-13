
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }} " rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href=" {{ asset('css/funpacol.css') }} " rel="stylesheet">

    <!-- font-awesome -->
    <link href=" {{ asset('font-awesome/css/font-awesome.min.css') }} " rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">



    <title>Funpacol</title>


</head>

<body>

<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Fundación Padrinos de Colombia</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav nav-pills pull-right">
                <!-- Authentication Links -->
                @if (Auth::guest())

                    <a href="#login" class="btn btn-success personal" data-toggle="modal">Iniciar sesión</a>

                @else
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Inicio</a></li>
                        <li><a href="#about">ejemplo</a></li>
                        <li><a href="#contact">ejemplo</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">desplegable <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">ejemplo</a></li>

                            </ul>
                        </li>
                    </ul>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="#"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>


<div id="login" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Fundacion Padrinos de Colombia</h4>
            </div>
            <div class="modal-body">
                {!! Form::open(['route' => 'login', 'method'=>'POST', 'role' => 'form',  'autocomplete'=>'off']) !!}

                {{ Form::token() }}

                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"> <i class="fa fa-envelope"></i></span>
                        {!! Form::email('email', null,['class'=>'form-control', 'placeholder'=>'Ejemplo@ejemplo.com']) !!}
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"> <i class="fa fa-lock"></i></span>
                        {!! Form::password('password', ['class'=>'form-control', 'placeholder'=>'Contraseña']) !!}
                    </div>
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-success pull-right" value="Entrar">
                </div>

                {!! Form::close() !!}
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->




<div class="container">

   @yield('content')

</div> <!-- /container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src=" {{ asset('js/jquery.min.js') }} "></script>

<script src=" {{ asset('js/bootstrap.min.js') }} "></script>

</body>
</html>