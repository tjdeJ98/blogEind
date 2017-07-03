<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Lang" content="nl">
    <meta name="author" content="J.J. Strootman">
    <meta http-equiv="Reply-to" content="noreply@alfa-college.nl">
    <meta name="description" content="Voorbeeld code voor de lessen rondom Laravel">
    <meta name="keywords" content="">
    <meta name="creation-date" content="03/16/2017">
    <meta name="revisit-after" content="60 days">
    <meta name="google" content="nostranslate">
    <meta name="robots" content="noodp, noarchive">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

    <title>Blog | Lessen Laravel - Fase 4</title>

    <link rel="stylesheet" type="text/css" href={{asset("css/bootstrap.min.css")}}>
    <link rel="stylesheet" type="text/css" href={{asset("css/bootstrap-theme.min.css")}}>
    <link rel="stylesheet" type="text/css" href={{asset("css/blog.css")}}>
</head>

<body>
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
            <a class="navbar-brand" href="{{ url('/')}}">BLOG</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse navbar-right">
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{ url('/')}}">Home</a></li>
                @if(Auth::guest())
                <li><a href="{{ route('login') }}">Aanmelden</a></li>
                <li><a href="{{ route('register') }}">Registreren</a></li>
                @else
                <li><a href="#">Profiel van {{ Auth::user()->username }}</a></li>
                 <li><a href="#about">Over</a></li>
                <li><a href="#contact">Contact</a></li>
                <li>
                    <a href="{{ url('/logout') }}"
                       onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                        Afmelden
                    </a>
                    <form id="logout-form"
                          action="{{ url('/logout') }}"
                          method="POST"
                          style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
                @endif
                @if(Auth::check() && Auth::user()->isAdmin())
                <li><a href="{{ url('post/create') }}">nieuwe post</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>

@yield('content')
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
@yield('scripts')
</body>
</html>