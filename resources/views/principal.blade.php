<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Barber Time 2.0 - Sistema de Gerenciamento de Barbearia</title>

        <!-- Bootstrap URL - CSS -->
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <!-- Custom styles for this template -->
        <link href="{{ url('/css/signin.css') }}" rel="stylesheet">

        <!-- Scripts AJAX/JQuery -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.js" integrity="sha256-fNXJFIlca05BIO2Y5zh1xrShK3ME+/lYZ0j+ChxX2DA=" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

        @yield('script')

    </head>

    <body role="document">
        <!-- Fixed navbar -->
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand">Barber Time 2.0 - Sistema de Gerenciamento de Barbearia</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active">
                                <a href="{{ url('/') }}">
                                    Home
                                </a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        @if(Auth::check())
                            <li>
                                <a> {{ Auth::user()->name }}</a>
                            </li>
                            <li class="active">
                                <a href="{{ url('/logout') }}">
                                    <span class="glyphicon glyphicon-log-out">
                                        Sair
                                    </span>
                                </a>
                            </li>
                        @endif
                        <!-- <li class="active"><a href="./">Default <span class="sr-only">(current)</span></a></li>-->
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container theme-showcase" role="main">

            <div class="page-header">

                <div class="page-header">
                    <h1 class="form-signin-heading">
                        @yield('cabecalho')
                    </h1>
                </div>

                @yield('conteudo')

            </div>

            <div class="page-header">
                <b>&copy;2019
                    &nbsp;&nbsp;&raquo;&nbsp;&nbsp;
                    Luiz Carlos Efigênio
                    &nbsp;&nbsp;&raquo;&nbsp;&nbsp;
                    versão 2.0
                </b>
            </div>
        </div>
    </body>
</html>
