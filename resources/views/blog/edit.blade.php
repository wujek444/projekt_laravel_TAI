@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <h1 class="regulaminH1">Edytuj posty</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <form class="" action="{{route('blog.update', $blog->id)}}" method="post">
                    <input name="_method" type="hidden" value="PATCH">
                    {{csrf_field()}}
                    <div class="form-group{{ ($errors->has('title')) ? $errors->first('title') : '' }}">
                        <label for="title">Tytuł posta </label>
                        <input type="text" id="title" name="title" class="form-control" placeholder="Wpisz tytuł!" value="{{$blog->title}}">
                        {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
                    </div>
                    <div class="form-group{{ ($errors->has('description')) ? $errors->first('description') : '' }}">
                        <label for="description">Opis posta </label>
                        <input type="text" id="description" name="description" class="form-control" placeholder="Wpisz opis!" value="{{$blog->description}}">
                        {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
                    </div>
                    <div class="form-group{{ ($errors->has('post_content')) ? $errors->first('post_content') : '' }}">
                        <label for="post_content">Treść posta </label>
                        <textarea id="post_content" name="post_content" class="form-control" rows="10" cols="70" placeholder="Wpisz zawartość posta!" >{{$blog->post_content}}</textarea>
                        {!! $errors->first('post_content', '<p class="help-block">:message</p>') !!}
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Zapisz">
                        <a href="{{route('blog.index')}}" class="btn btn-success">Powrót</a>
                    </div>

                </form>
            </div>
        </div>
    </div>
            @stop