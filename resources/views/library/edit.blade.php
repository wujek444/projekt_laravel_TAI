@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="page-header">
                <h1 class="regulaminH1">Edytuj grę</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <form class="" action="{{route('library.update', $game->id)}}" method="post">
                    <input name="_method" type="hidden" value="PATCH">
                    {{csrf_field()}}
                    <div class="form-group{{ ($errors->has('title')) ? $errors->first('title') : '' }}">
                        <label for="title">Tytuł gry </label>
                        <input type="text" id="title" name="title" class="form-control" placeholder="Wpisz tytuł!" value="{{$game->title}}">
                        {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
                    </div>
                    <div class="form-group{{ ($errors->has('price_category')) ? $errors->first('price_category') : '' }}">
                        <label for="price_category">Kategoria cenowa (zł/dzień)</label>
                        <input type="number" id="price_category" name="price_category" class="form-control" value="{{$game->price_category}}">
                        {!! $errors->first('price_category', '<p class="help-block">:message</p>') !!}
                    </div>
                    <div class="form-group{{ ($errors->has('min_player_count')) ? $errors->first('min_player_count') : '' }}">
                        <label for="min_player_count">Minimalna liczba graczy</label>
                        <input type="number" id="min_player_count" name="min_player_count" class="form-control" value="{{$game->min_player_count}}">
                        {!! $errors->first('min_player_count', '<p class="help-block">:message</p>') !!}
                    </div>
                    <div class="form-group{{ ($errors->has('max_player_count')) ? $errors->first('max_player_count') : '' }}">
                        <label for="max_player_count">Maksymalna liczba graczy</label>
                        <input type="number" id="max_player_count" name="max_player_count" class="form-control" value="{{$game->max_player_count}}">
                        {!! $errors->first('max_player_count', '<p class="help-block">:message</p>') !!}
                    </div>
                    <div class="form-group{{ ($errors->has('description')) ? $errors->first('description') : '' }}">
                        <label for="description">Opis gry </label>
                        <textarea id="description" name="description" class="form-control" rows="10" cols="70" placeholder="Wpisz opis gry!">{{$game->description}}</textarea>
                        {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
                    </div>
                    <div class="form-group{{ ($errors->has('genre')) ? $errors->first('genre') : '' }}">
                        <label for="genre">Gatunek gry </label>
                        <input type="text" id="genre" name="genre" class="form-control" placeholder="Podaj gatunek gry!" value="{{$game->genre}}">
                        {!! $errors->first('genre', '<p class="help-block">:message</p>') !!}
                    </div>
                    <div class="form-group{{ ($errors->has('link')) ? $errors->first('link') : '' }}">
                        <label for="link">Link</label>
                        <input type="url" id="link" name="link" class="form-control" placeholder="Podaj link do materiałów odnośnie gry" value="{{$game->link}}">
                        {!! $errors->first('link', '<p class="help-block">:message</p>') !!}
                    </div>
                    <div class="form-group{{ ($errors->has('img_src')) ? $errors->first('img_src') : '' }}">
                        <label for="img_src">Adres url obrazka</label>
                        <input type="url" id="img_src" name="img_src" class="form-control" placeholder="Podaj adres url obrazka!" value="{{$game->img_src}}">
                        {!! $errors->first('link', '<p class="help-block">:message</p>') !!}
                    </div>
                    <div class="form-group{{ ($errors->has('state')) ? $errors->first('state') : '' }}">
                        <label for="state">Niedostępna</label>
                        <input type="radio" id="state" name="state" class="" value="0"><br/>
                        <label for="state2">Dostępna</label>
                        <input type="radio" id="state2" name="state" class="" value="1">
                        {!! $errors->first('state', '<p class="help-block">:message</p>') !!}
                    </div>



                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Zapisz">
                        <a href="{{route('library.index')}}" class="btn btn-success">Powrót</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection