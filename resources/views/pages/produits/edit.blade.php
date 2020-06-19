
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
                <form action="{{ url('/pd-update') }}" method="post" enctype="multipart/form-data">
                    <h1 class="text text-center">ADD YOUR PRODUCTS !!!</h1>

                    @csrf()
                    <div class="form-group">
                        <label for="">Designation</label>
                    <input type="text" name="designation" class="form-control" value="{{$produit->designation}}">
                        <span class="text-danger">{{ ($errors->has('designation')) ? $errors->first('designation') : '' }}</span>
                    </div>
                    <div class="form-group">
                        <label for="">P.Achat</label>
                    <input type="text" name="prixAchat" class="form-control" value="{{$produit->prixAchat}}">
                        <span class="text-danger">{{ ($errors->has('prixachat')) ? $errors->first('prixachat') : '' }}</span>
                    </div>
                    <div class="form-group">
                        <label for="">P.Vente</label>
                    <input type="text" name="prixVente" class="form-control" value="{{$produit->prixVente}}">
                        <span class="text-danger">{{ ($errors->has('prixVente')) ? $errors->first('prixVente') : '' }}</span>
                    </div>
                    <div class="form-group">
                        <label for="">Image</label>
                    <input type="file" name="image" class="form-control" value="{{$produit->image}}">
                        <span class="text-danger">{{ ($errors->has('image')) ? $errors->first('image') : '' }}</span>
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Save</button>
                    </div>
                </form>
            </div>
        </div>
</div>
@endsection