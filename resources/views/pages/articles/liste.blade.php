@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if(Session::has('succes'))
                <p class="alert alert-success">{{ Session::get('succes') }}</p>                
            @endif
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            @foreach($articles as $article)
                <div>
                    <h1><a href="{{ url('art-show', $article->id) }}">{{ $article->title }}</a></h1>
                    <p>
                        {{($article->content) }}
                    </p>
                        <span>Created at {{($article->date) }}</span>
                    <p>
                        <a class="btn btn-warning" href="{{url('art-edit', $article->id) }}">Modifier</a>
                        <a class="btn btn-danger" href="{{url('art-destroy', $article->id) }}">Supprimer</a>
                    </p>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection