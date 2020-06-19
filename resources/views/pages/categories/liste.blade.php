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
            @foreach($categories as $categorie)
                <div>
                    <h1><a href="{{ url('show', $categorie->id) }}">{{ $categorie->name }}</a></h1>
                    <p>
                        {{($categorie->description) }}
                    </p>
                    <p>
                        <a class="btn btn-warning" href="{{url('edit', $categorie->id) }}">Edit</a>
                        <a class="btn btn-danger" href="{{url('destroy', $categorie->id) }}">Delete</a>
                    </p>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection