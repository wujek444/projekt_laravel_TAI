@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <h1 class="regulaminH1">Biblioteka gier</h1>
                </div>
            </div>
        </div>
        <div class="row">
            @if ( session()->has('alert-success') )
                <div class="alert alert-success" style="text-align: center">{{ session()->get('alert-success') }}</div>
            @endif
            <table class="table table-hover" style="background-color: #761c19">
                <tr style="color: black; background-color: white">
                    <th>ID</th>
                    <th>Tytuł</th>
                    <th>Kategoria cenowa</th>
                    <th>Minimalna liczba graczy</th>
                    <th>Maksymalna liczba graczy</th>
                    <th>Gatunek</th>
                    <th>Dostępność</th>
                    <th>Działania</th>
                </tr>
                @if(Auth::user()->hasRole('Admin'))
                <a href="{{route('library.create')}}" class="btn btn-info pull-right" style="width: 20%">Dodaj nową grę</a><br/><br/>
                @endif

                @foreach($games as $game)
                    <tr>
                        <td>{{$game->id}}</td>
                        <td>{{$game->title}}</td>
                        <td>{{$game->price_category}}</td>
                        <td>{{$game->min_player_count}}</td>
                        <td>{{$game->max_player_count}}</td>
                        <td>{{$game->genre}}</td>
                        <td>{{$game->state}}</td>
                        <td>
                            <form class="" action="{{route('library.destroy', $game->id)}}" method="post">
                                <input type="hidden" name="_method" value="delete">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <a href="{{route('library.show', $game->id)}}" class="btn btn-success">Wyświetl</a>
                                @if(Auth::user()->hasRole('Admin'))
                                <a href="{{route('library.edit', $game->id)}}" class="btn btn-primary">Edytuj</a>
                                <input type="submit" class="btn btn-danger" onclick="return confirm('Czy na pewno chcesz usunąć tą grę?')" name="name" value="Usuń">
                                    @endif
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>


@stop