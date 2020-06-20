
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
                <form action="{{ url('/save') }}" method="post">

                    @csrf()
                    <h1>Ajout d'utilisateur</h1>
                    <div class="form-group">
                        <label for="">name</label>
                        <input type="text" name="name" class="form-control">
                        <span class="text-danger">{{ ($errors->has('name')) ? $errors->first('name'): '' }}</span>
                    </div>
                    <div class="form-group">
                        <label for="">E-Mail Address</label>
                        <input type="text" name="email" class="form-control">
                        <span class="text-danger">{{ ($errors->has('email')) ? $errors->first('email'): '' }}</span>
                    </div>
                    <div class="form-group">
                        <label for="">phone</label>
                        <input type="text" name="phone" class="form-control">
                        <span class="text-danger">{{ ($errors->has('phone')) ? $errors->first('phone'): '' }}</span>
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" name="password" class="form-control">
                        <span class="text-danger">{{ ($errors->has('password')) ? $errors->first('password'): '' }}</span>
                    </div>
                    <!-- <div class="form-group">
                        <label for="">Confirm Password</label>
                        <input type="password" name="name" class="form-control">
                        <span class="text-danger">{{ ($errors->has('Confirm Password')) ? $errors->first('Confirm Password'): '' }}</span>
                    </div> -->
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Save</button>
                    </div>
                </form>
            </div>
        </div>
</div>
@endsection