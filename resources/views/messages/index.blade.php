@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <h1 class="regulaminH1">Wiadomości</h1>
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
                    <th>Imię i nazwisko</th>
                    <th>E-mail</th>
                    <th>Treść</th>
                    <th>Wysłano</th>
                    <th>Działania</th>
                </tr>


                @foreach($messages as $message)
                    <tr>
                        <td>{{$message->id}}</td>
                        <td>{{$message->kontakt_imieNazwisko}}</td>
                        <td>{{$message->kontakt_email}}</td>
                        <td>{{$message->kontakt_wiadomosc}}</td>
                        <td>{{$message->created_at}}</td>
                        <td>
                            <form class="" action="{{route('messages.destroy', $message->id)}}" method="post">
                                <input type="hidden" name="_method" value="delete">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>


@stop