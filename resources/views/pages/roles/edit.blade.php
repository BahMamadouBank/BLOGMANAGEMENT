@extends('home')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form action="{{ url('role-edit', $role->id) }}" method="post">

                @csrf()
                <div class="form-group">
                    <label for="title">Role</label>
                    <input type="text" name="name" value="{{ $role->name }}" class="form-control">
                    <span class="text-danger">{{ ($errors->has('name')) ? $errors->first('name') : '' }}</span>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{ $role->description }}</textarea>
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