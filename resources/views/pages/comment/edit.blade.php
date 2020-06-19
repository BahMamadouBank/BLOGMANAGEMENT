@extends('Layouts.app')
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
            <form action="{{ url('comment-edit', $comment->id) }}" method="post">

                @csrf()
                <div class="form-group">
                    <label for="content">Comment</label>
                    <textarea name="comment" id="comment" cols="30" rows="10" class="form-control">{{ $comment->comment }}</textarea>
                    <span class="text-danger">{{ ($errors->has('comment'))? $errors->first('comment') : '' }}</span>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection