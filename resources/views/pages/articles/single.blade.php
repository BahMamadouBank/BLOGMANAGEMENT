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

            <div>
                <h1 class="text text-info"> {{ $article->title }} </h1>
                <p>
                    {{($article->content) }}
                </p>
                <span>
                   Created at {{($article->date)}}
                </span>
        </div>
    </div>
</div>
@endsection