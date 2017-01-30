@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="panel-heading"><h1 class="regulaminH1 page-header" align="center">Formularz do rejestracji:</h1></div>
        <div class="col-md-8">

                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('imie') ? ' has-error' : '' }}">
                            <label for="imie" class="col-md-4 control-label">Imię</label>

                            <div class="col-md-6">
                                <input id="imie" type="text" placeholder="Imię" class="form-control" name="imie" value="{{ old('imie') }}"
                                       required pattern="[A-Za-ząęśćżźóńł]{2,10}" title="Można używać jedynie liter!" required autofocus>

                                @if ($errors->has('imie'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('imie') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('nazwisko') ? ' has-error' : '' }}">
                            <label for="nazwisko" class="col-md-4 control-label">Nazwisko</label>

                            <div class="col-md-6">
                                <input id="nazwisko" type="text" placeholder="Nazwisko" class="form-control" name="nazwisko" value="{{ old('nazwisko') }}" required autofocus required
                                       pattern="[A-Za-ząęśćżźóńł]{2,20}" title="Można używać jedynie liter!">

                                @if ($errors->has('nazwisko'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nazwisko') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" placeholder="adres@domena.pl" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('telefon') ? ' has-error' : '' }}">
                            <label for="imie" class="col-md-4 control-label">Nr telefonu</label>

                            <div class="col-md-6">
                                <input id="telefon" type="tel" placeholder="999999999" class="form-control" name="telefon" value="{{ old('telefon') }}"
                                       required autofocus required
                                       pattern="[0-9]{9}" title="Zły format numetu telefonu! Wymagany format: xxxxxxxxx">

                                @if ($errors->has('telefon'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telefon') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('login') ? ' has-error' : '' }}">
                            <label for="login" class="col-md-4 control-label">Nazwa użytkownika</label>

                            <div class="col-md-6">
                                <input id="login" type="text" class="form-control" placeholder="Login" name="login" value="{{ old('login') }}" required autofocus>

                                @if ($errors->has('login'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('login') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('data_urodzenia') ? ' has-error' : '' }}">
                            <label for="data_urodzenia" class="col-md-4 control-label">Data urodzenia</label>

                            <div class="col-md-6">
                                <input id="data_urodzenia" type="date" class="form-control" name="data_urodzenia" value="{{ old('data_urodzenia') }}" required autofocus>

                                @if ($errors->has('data_urodzenia'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('data_urodzenia') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Hasło</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Potwierdź hasło</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-success" style="width: 25%">
                                    Zarejestruj
                                </button>
                                <button type="reset" class="btn btn-danger">Wyczyść formularz</button><br/><br/>
                                <button type="button" class="btn btn-primary" onclick="store()">Zapisz do localStorage</button>
                                <button type="button" class="btn btn-default" onclick="load()">Wczytaj z localStorage</button>
                            </div>
                        </div>
                    </form>
                </div>
        </div>
        <div class="col-md-4 " >
            <img src="img/join_us.jpg" alt="Join us!" align="right" style="float: right">
        </div>
    </div>

</div>
<script  type="text/javascript">
    function store(){
        var imie= document.getElementById("imie");
        var nazwisko= document.getElementById("nazwisko");
        var email= document.getElementById("email");
        var telefon= document.getElementById("telefon");
        var login= document.getElementById("login");
        var data_urodzenia= document.getElementById("data_urodzenia");

        localStorage.setItem("imie", imie.value);
        localStorage.setItem("nazwisko", nazwisko.value);
        localStorage.setItem("email", email.value);
        localStorage.setItem("telefon", telefon.value);
        localStorage.setItem("data_urodzenia", data_urodzenia.value);
    }
    function load() {
        var imie= document.getElementById("imie");
        var nazwisko= document.getElementById("nazwisko");
        var email= document.getElementById("email");
        var telefon= document.getElementById("telefon");
        var login= document.getElementById("login");
        var data_urodzenia= document.getElementById("data_urodzenia");

        imie.value = localStorage.getItem("imie");
        nazwisko.value = localStorage.getItem("nazwisko");
        email.value = localStorage.getItem("email");
        telefon.value = localStorage.getItem("telefon");
        login.value = localStorage.getItem("login");
        data_urodzenia.value = localStorage.getItem("data_urodzenia");
    }
</script>
@endsection
