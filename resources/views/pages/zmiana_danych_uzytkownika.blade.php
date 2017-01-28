@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="panel-heading"><h1 class="regulaminH1 page-header" align="center">Zmiana danych użytkownika</h1></div>
            <div class="col-md-8">

                <div class="panel-body">
                    <form class="form-horizontal" role="form" action="{{route('zmiana_danych_uzytkownika.update',Auth::user()->id)}}" method="POST" >
                        <input name="_method" type="hidden" value="PATCH">

                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('imie') ? ' has-error' : '' }}">
                            <label for="imie" class="col-md-4 control-label">Imię</label>

                            <div class="col-md-6">
                                <input id="imie" type="text" placeholder="Imię" class="form-control" name="imie" value="{{ Auth::user()->imie }}" required autofocus>

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
                                <input id="nazwisko" type="text" placeholder="Nazwisko" class="form-control" name="nazwisko" value="{{ Auth::user()->nazwisko }}" required autofocus>

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
                                <input id="email" type="email" placeholder="adres@domena.pl" class="form-control" name="email" value="{{ Auth::user()->email }}" required>

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
                                <input id="telefon" type="text" placeholder="999999999" class="form-control" name="telefon" value="{{ Auth::user()->telefon }}" required autofocus>

                                @if ($errors->has('telefon'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telefon') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('login') ? ' has-error' : '' }}">
                            <label for="login" class="col-md-4 control-label">Nazwa użytkownika    <br/> (podawane przy logowaniu)</label>

                            <div class="col-md-6">
                                <input id="login" type="text" class="form-control" placeholder="Login" name="login" value="{{ Auth::user()->login }}" required autofocus>

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
                                <input id="data_urodzenia" type="date" class="form-control" name="data_urodzenia" value="{{ Auth::user()->data_urodzenia }}" required autofocus>

                                @if ($errors->has('data_urodzenia'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('data_urodzenia') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary" style="width: 50%">
                                    Zatwierdź
                                </button>
                                <a href="/dane_uzytkownika" class="btn btn-success">Powrót</a>

                                {{--<a href="/user_update" class="btn btn-info" role="button">Zatwierdź</a>--}}
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4 " >
                <img src="/img/join_us.jpg" alt="Join us!" align="right" style="float: right">
            </div>
        </div>
    </div>

@endsection
