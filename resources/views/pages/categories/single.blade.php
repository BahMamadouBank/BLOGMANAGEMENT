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

            <div>
                <h1 class="text text-info"> {{ $categorie->name }} </h1>
                <p>
                    {{($categorie->description) }}
                </p>
        </div>
    </div>
</div>
@endsection