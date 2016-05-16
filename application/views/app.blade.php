<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>{{ $title }}</title>
        <meta name="theme-color" content="#0c84e4">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ base_url('assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ base_url('assets/css/style.css') }}">
        <script type="text/javascript">
            var base_url = '{{ base_url() }}';
            var site_url = '{{ site_url() }}';
        </script>
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
                        <a class="navbar-brand" href="{{ site_url('/') }}"><em>Para</em></a>
                    </div>

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                        <ul class="nav navbar-nav">
                            <li><a href="{{ site_url('/') }}"> Home <span class="sr-only">(current)</span></a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Admin</a>
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ site_url('admin/login') }}">Login</a>
                                    </li>                                    
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
        <!-- @if(!$currentController || $currentController='extension')
            <script type="text/javascript" src="{{ base_url('assets/js/example_extra_js.js') }}"></script>
        @endif -->
    </body>
</html>
