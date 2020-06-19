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
            @foreach($comments as $comment)
                <div>
                    <h5><a href="{{ url('comment-show', $comment->id) }}">
                        {{ $comment->comment}}
                    </a></h5>
                  
                        <span>Created at {{($comment->created_at) }}</span>
                    <p>
                        <a class="btn btn-warning" href="{{url('comment-edit', $comment->id) }}">Edit</a>
                        <a class="btn btn-danger" href="{{url('comment-destroy', $comment->id) }}">Delete</a>
                    </p>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection