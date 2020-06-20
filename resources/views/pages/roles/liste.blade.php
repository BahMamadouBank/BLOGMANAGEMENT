@extends('home')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @foreach($roles as $role)
                <div>
                    <h1>{{ $role->name }}</h1>
                    <p>
                        {{($role->description) }}
                    </p>
                    <p>
                        <a class="btn btn-info " href="{{url('role-edit', $role->id) }}">Edit</a>
                        <a class="btn btn-danger pull-right" href="{{url('role-destroy', $role->id) }}">Delete</a>
                    </p>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection