@extends('home')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ url('/store') }}" method="post">
                    <div><h1>Ajouter une Commande</h1></div>
                    @csrf()
                    <div class="form-group">
                        <label for="">Date</label>
                        <input type="text" name="date" class="form-control">
                        <span class="text-danger">{{ ($errors->has('date')) ? $errors->first('date') : '' }}</span>
                    </div>
                    
                    <div class="form-group">
                        <label for="">prixtotal</label>
                        <input type="text" name="prixtotal" class="form-control">
                        <span class="text-danger">{{ ($errors->has('prixtotal')) ? $errors->first('prixtotal') : '' }}</span>
                    </div>

                    <div class="form-group">
                        <label for="">client_id</label>
                        <input type="text" name="client_id" class="form-control">
                        <span class="text-danger">{{ ($errors->has('client_id')) ? $errors->first('client_id') : '' }}</span>
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Save</button>
                    </div>
                </form>
            </div>
        </div>
</div>
@endsection