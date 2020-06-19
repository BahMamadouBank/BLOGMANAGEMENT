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
            <form action="{{ url('art-edit', $article->id) }}" method="post">

                @csrf()
                <div class="form-group">
                    <label for="title">Article</label>
                    <input type="text" name="title" value="{{ $article->title }}" class="form-control">
                    <span class="text-danger">{{ ($errors->has('title')) ? $errors->first('title') : '' }}</span>
                </div>
                <div class="form-group">
                    <label for="title">Data</label>
                    <input type="text" name="date" value="{{ $article->date }}" class="form-control">
                    <span class="text-danger">{{ ($errors->has('date')) ? $errors->first('date') : '' }}</span>
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea name="content" id="content" cols="30" rows="10" class="form-control">{{ $article->content }}</textarea>
                    <span class="text-danger">{{ ($errors->has('content'))? $errors->first('content') : '' }}</span>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection