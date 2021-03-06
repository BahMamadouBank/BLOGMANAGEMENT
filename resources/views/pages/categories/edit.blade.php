@extends('home')
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
            <form action="{{ url('edit', $categorie->id) }}" method="post">

                @csrf()
                <div class="form-group">
                    <label for="title">Categorie</label>
                    <input type="text" name="name" value="{{ $categorie->name }}" class="form-control">
                    <span class="text-danger">{{ ($errors->has('name')) ? $errors->first('name') : '' }}</span>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{ $categorie->description }}</textarea>
                    <span class="text-danger">{{ ($errors->has('description'))? $errors->first('description') : '' }}</span>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection