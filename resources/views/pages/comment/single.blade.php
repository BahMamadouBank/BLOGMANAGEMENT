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
                <h1 class="text text-info"> {{ $comment->comment }} </h1>
                <p>
                    {{($comment->comment) }}
                </p>
                <span>
                   Created at {{($comment->Created_at)}}
                </span>
        </div>
    </div>
</div>
@endsection