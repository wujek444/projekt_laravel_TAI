@extends('layout')
@section('content')
    <div class="container">
        <div class="page-header">
            <h1 class="regulaminH1">Dane użytkownika</h1>
        </div>
        <div class="col-sm-8">
            <ul>
                <li><strong>Imię:</strong> <span style="color: lawngreen">{{ Auth::user()->imie }}</span></li>
                <li><strong>Nazwisko:</strong> <span style="color: lawngreen">{{ Auth::user()->nazwisko }}</span></li>
                <li><strong>E-mail:</strong> <span style="color: lawngreen">{{ Auth::user()->email }}</span></li>
                <li><strong>Telefon:</strong> <span style="color: lawngreen">{{ Auth::user()->telefon }}</span></li>
                <li><strong>Login:</strong> <span style="color: lawngreen">{{ Auth::user()->login }}</span></li>
                <li><strong>Data urodzenia:</strong> <span style="color: lawngreen">{{ Auth::user()->data_urodzenia }}</span></li>
                <li><strong>Konto utworzone:</strong> <span style="color: lawngreen">{{ Auth::user()->created_at }}</span></li>
            </ul><br/>
          <?php echo '<a href="pages.zmiana_danych_uzytkownika" class="btn btn-danger">Edytuj dane użytkownika</a>' ?>

        </div>
        {{--<div class="col-sm-4">--}}
            {{--<div class="thumbnail thumbRegulamin">--}}
                {{--<img src="img/obey.png" class="img-responsive" alt="obey">--}}
            {{--</div>--}}
        {{--</div>--}}
    </div>
@endsection