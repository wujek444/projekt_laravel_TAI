<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head
    content must come *after* these tags -->
    <title>Analogowe Granie - strona główna</title>

    <!-- Bootstrap -->
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300'
          rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet'
          type='text/css'>
    <link href="/css/myCustom.css" rel="stylesheet">
    <script src="https://use.fontawesome.com/88fabdec75.js"></script>
    <script type="text/javascript" src="/js/jquery-2.2.4.js"></script>
    <script type="text/javascript" src="/js/bootstrap.js"></script>
    <script type="text/javascript" src="/js/myCustomJS.js"></script>
    <script type="text/javascript" src="/js/obliczenia.js"></script>
    <script src="https://use.fontawesome.com/88fabdec75.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="icon" href="/favicons/favicon.png">
    <script type="text/javascript">
        $(document).ready(function () {
            $('.dropdown-toggle').dropdown();
        });
    </script>

</head>
<body class="blackBody">
<!--UPPER NAVBAR-->
<div class="navbar navbar-default navbar-fixed-top redNavbar" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only"> Toggle navigation </span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ action('PagesController@index') }}">Analogowe Granie</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li <?php if ($_SERVER['REQUEST_URI']=='/index') echo 'class="active"'; ?>><a href="{{ action('PagesController@index') }}">Strona główna</a></li>
                <li <?php if ($_SERVER['REQUEST_URI']=='/blog') echo 'class="active"'; ?>><a href="{{ action('BlogController@index') }}">News-blog</a></li>
                <li <?php if ($_SERVER['REQUEST_URI']=='/wypozycz') echo 'class="active"'; ?>><a href="{{ action('PagesController@wypozycz') }}">Wypożycz grę!</a></li>
                <li <?php if ($_SERVER['REQUEST_URI']=='/regulamin') echo 'class="active"'; ?>><a href="{{ action('PagesController@regulamin') }}">Regulamin</a></li>
                <li <?php if ($_SERVER['REQUEST_URI']=='/galeria') echo 'class="active"'; ?>><a href="{{ action('PagesController@galeria') }}">Galeria</a></li>
                <li><a href="#contact" data-toggle="modal">Kontakt</a></li>
                @if(Auth::guest())<!-- jeżeli niezalogowany użytkownik odwiedza stronę-->
                <li <?php if ($_SERVER['REQUEST_URI']=='/register') echo 'class="active"'; ?>><a href="{{ action('Auth\RegisterController@register') }}">Zarejestruj się</a></li>
                <li <?php if ($_SERVER['REQUEST_URI']=='/login') echo 'class="active"'; ?>><a href="{{ action('Auth\LoginController@login') }}">Zaloguj się</a></li>
                @endif
                @if(Auth::user())
                    <li class="dropdown" id="accountmenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{ Auth::user()->login }}<b class="caret"></b></a>
                        <ul class="dropdown-menu" style="background-color: darkred">
                            <li <?php if ($_SERVER['REQUEST_URI']=='/dane_uzytkownika') echo 'class="active"'; ?>><a href="{{ action('PagesController@dane_uzytkownika') }}" style="color: white">Dane użytkownika</a></li>
                            <li class="divider"></li>
                            <li <?php if ($_SERVER['REQUEST_URI']=='/logout') echo 'class="active"'; ?>><a href="{{ action('Auth\LoginController@logout') }}" style="color: white">Wyloguj się</a></li>
                        </ul>
                    </li>

                @endif
            </ul>
        </div>
    </div>
</div>

        @yield('content')

<!-- FOOTER -->
<div class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
    <div class="container">
        <div class="navbar-text pull-left">
            <p>© 2016 Jakub Wójcik</p>
        </div>
        <div class="navbar-text pull-right">
            <a href="https://www.facebook.com/"><i class="fa fa-facebook-square fa-2x"></i></a>
            <a href="https://www.twitter.com/"><i class="fa fa-twitter fa-2x"></i></a>
            <a href="https://www.google.com/"><i class="fa fa-google-plus fa-2x"></i></a>
        </div>
    </div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<div class="modal fade" id="contact" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form class="form-horizontal" role="form" action="mailto:wujek444@gmail.com" method="post">
                <div class="modal-header">
                    <h4>Kontakt:</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="kontakt-imieNazwisko" class="col-sm-2 control-label">Imię i nazwisko:</label>
                        <div class="col-sm-10">
                            @if(Auth::guest())
                            <input type="text" class="form-control" id="kontakt-imieNazwisko" placeholder="Imię i nazwisko"
                                   pattern="[A-Za-ząęśżźćóńł]{2,10} [A-Za-ząęśżźćóńł]{2,20}" required title="Wprowadź wiadomość w prawidłowym formacie(Imię Nazwisko). Można używać jedynie liter!">
                            @endif
                            @if(Auth::user())
                                   <?php echo '<input type="text" value="'.Auth::user()->imie.' '.Auth::user()->nazwisko.'" disabled class="form-control" id="kontakt-imieNazwisko" placeholder="Imię i nazwisko"
                                           pattern="[A-Za-ząęśżźćóńł]{2,10} [A-Za-ząęśżźćóńł]{2,20}" required title="Wprowadź wiadomość w prawidłowym formacie(Imię Nazwisko). Można używać jedynie liter!">'?>
                                @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="kontakt-email" class="col-sm-2 control-label">Email:</label>
                        <div class="col-sm-10">
                            @if(Auth::guest())
                            <input type="email" class="form-control" id="kontakt-email" placeholder="adres@domena.com">
                                @endif
                            @if(Auth::user())
                                <?php echo '<input type="email" value="'.Auth::user()->email.'" disabled class="form-control" id="kontakt-email" placeholder="adres@domena.com">'?>
                                @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="kontakt-wiadomosc" class="col-sm-2 control-label">Wiadomość:</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="kontakt-wiadomosc" rows="4" placeholder="Twoja wiadomość..."></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-default" data-dismiss="modal">Zamknij</a>
                    <button type="submit" class="btn btn-primary">Wyślij</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files
      as needed -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>