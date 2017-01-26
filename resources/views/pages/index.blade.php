@extends('layout')
@section('content')
    <div class="container">
        <div class="page-header">
            <div class="jumbotron text-center jumboIndex">
                <h1 class="indexJumboH1">ANALOGOWE GRANIE</h1>
                <p class="indexJumboP">Twoja wypożyczalnia gier planszowych.</p>
                <div class="jumboBtn">
                    <a href="{{ action('PagesController@wypozycz') }}" class="btn btn-danger">Wypożycz już teraz!</a>
                </div>
            </div>
        </div>
        <!-- wyświetl wiadomość, gdy użytkownik zostanie wylogowany-->
        @if ( session()->has('logout_message') )
            <div class="alert alert-danger alert-danger" style="text-align: center">{{ session()->get('logout_message') }}</div>
        @endif
    <!-- wyświetl wiadomość, gdy użytkownik jest już zalogowany-->
        @if ( session()->has('already_authenticated_message') )
            <div class="alert alert-warning alert-warning" style="text-align: center">{{ session()->get('already_authenticated_message') }}</div>
        @endif
    <!-- wyświetl wiadomość, gdy użytkownik jest już zalogowany-->
        @if ( session()->has('login_message') )
            <div class="alert alert-success alert-success" style="text-align: center">{{ session()->get('login_message') }}</div>
        @endif
    <!-- wyświetl wiadomość, gdy użytkownik został zarejestrowany-->
        @if ( session()->has('registered_message') )
            <div class="alert alert-success alert-success" style="text-align: center">{{ session()->get('registered_message') }}</div>
        @endif

        <div class="row">
            <div class="col-sm-4"> <!--4/12 cols on the grid -->
                <a href="#contact" data-toggle="modal" class="thumbnail home-thumb">
                    <img src="img/Wypozycz.jpg" class="img-responsive" alt="Wypożycz grę!">
                </a>
                <h3>O nas:</h3>
                <p>Analogowe Granie to mała firma oferująca wypożyczanie gier planszowych
                    za niewielką opłatą na okres do tygodnia. Oferujemy nasze usługi dla osób
                    prywatnych oraz dla firm (np. na integracje firmowe).</p>
                <a href="#contact" data-toggle="modal" class="btn btn-danger">Napisz do nas!</a>
            </div>
            <div class="col-sm-4"> <!--4/12 cols on the grid -->
                <a href="{{ action('PagesController@wypozycz') }}" class="thumbnail home-thumb">
                    <img src="img/gry.jpg" alt="Wypożycz!">
                </a>
                <h3>Wypożyczaj gry!</h3>
                <p>Wybieraj spomiędzy wielu znanych i lubianych tytułów, zarówno dla
                    początkujących i weteranów gier planszowych, dla młodych i starych.
                    Zwolennicy różnych gatunków planszówek na pewno znajdą u nas coś dla siebie!</p>
                <a href="{{ action('PagesController@wypozycz') }}" class="btn btn-danger">Wypożycz!</a>
            </div>
            <div class="col-sm-4"> <!--4/12 cols on the grid -->
                <a href="{{ action('PagesController@galeria') }}" class="thumbnail home-thumb">
                    <img src="img/sklep.jpg" alt="wypozycz">
                </a>
                <h3>Wpadnij do nas!</h3>
                <p>Możesz także przyjść do naszej wypożyczalni, aby spotkać innych
                    pasjonatów gier planszowych, rozegrać partyjkę, nawiązać nowe znajomości lub
                    porozmawiać o pogodzie :)</p>
                <a href="{{ action('PagesController@galeria') }}" class="btn btn-danger">Obejrzyj galerię!</a>
            </div>
        </div>
    </div>
@endsection