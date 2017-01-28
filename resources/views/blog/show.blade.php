@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <h1 class="regulaminH1">{{$blog->title}}</h1>
                </div>
            </div>
        </div>
        <div class="row">
            {{$blog->post_content}} {{-- tutaj będzie treść, ale jest opis dla przetestowania--}}
        </div><br/><br/><br/>
        <a href="{{route('blog.index')}}" class="btn btn-success">Powrót</a>
    </div>
@stop