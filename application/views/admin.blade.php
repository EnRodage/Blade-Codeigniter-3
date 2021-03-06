<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>{{ $title }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#0c84e4">
        <link rel="stylesheet" href="{{ base_url('assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ base_url('assets/css/style.css') }}">
    </head>
    <body>
        <div class="header">
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="{{ site_url('admin/home') }}">Admin</a>
                    </div>

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                        <ul class="nav navbar-nav">
                            <li @if(!$currentPage || $currentPage=='home') class="active" @endif><a href="{{ site_url('admin/home') }}">Dashboard <span class="sr-only">(current)</span></a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> {{ $user->user_name }} <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ site_url('admin/login/logout') }}">Logout</a></li>
                                </ul>
                            </li>                            
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="container-fluid">
            @yield('content')
        </div>

        <div class="footer">
            <p align="center">&copy;{{ date('Y') }} <a href="#">EnRodage</a></p>
        </div>

        <script type="text/javascript" src="{{ base_url('assets/js/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ base_url('assets/js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ base_url('assets/js/gen_script.js') }}"></script>
    </body>
</html>
