@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <h1 class="regulaminH1">{{$game->title}}</h1>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <h4 class="regulaminH1">Opis gry:</h4>
            {{$game->description}} {{-- tutaj będzie treść, ale jest opis dla przetestowania--}}
            <h4 class="regulaminH1">Przydatne linki:</h4>
            <a href="{{$game->link}}">{{$game->link}}</a><br/><br/><br/>
            <a href="{{route('library.index')}}" class="btn btn-success">Powrót</a>
        </div>
        <div class="col-md-6">
            <img src="{{$game->img_src}}" width="100%" height="100%" class="img-responsive img-rounded">
        </div>
        {{--<div class="row">--}}
            {{----}}
        {{--</div>--}}
    </div>
@stop