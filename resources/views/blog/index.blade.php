@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <h1 class="regulaminH1">News-blog</h1>
                </div>
            </div>
        </div>
        <div class="row">
            @if ( session()->has('alert-success') )
                <div class="alert alert-success" style="text-align: center">{{ session()->get('alert-success') }}</div>
            @endif
            <table class="table table-hover" style="background-color: #761c19">
                <tr style="color: black; background-color: white">
                    <th>Numer</th>
                    <th>Tytuł</th>
                    <th>Opis</th>
                    <th>Data utworzenia</th>
                    <th>Data modyfikacji</th>
                    <th>Działania</th>
                </tr>
                @if(Auth::user()->hasRole('Admin'))
                <a href="{{route('blog.create')}}" class="btn btn-info pull-right" style="width: 20%">Dodaj nowego posta</a><br/><br/>
                @endif
                <?php $no=1; ?>


                @foreach($blogs as $blog)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$blog->title}}</td>
                        <td>{{$blog->description}}</td>
                        <td>{{$blog->created_at}}</td>
                        <td>{{$blog->updated_at}}</td>
                        <td>
                            <form class="" action="{{route('blog.destroy', $blog->id)}}" method="post">
                                <input type="hidden" name="_method" value="delete">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <a href="{{route('blog.show', $blog->id)}}" class="btn btn-success">Wyświetl</a>
                                @if(Auth::user()->hasRole('Admin'))
                                <a href="{{route('blog.edit', $blog->id)}}" class="btn btn-primary">Edytuj</a>
                                <input type="submit" class="btn btn-danger" onclick="return confirm('Czy na pewno chcesz usunąć ten wpis?')" name="name" value="Usuń">
                                    @endif
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </table>
        </div>
    </div>


    @stop