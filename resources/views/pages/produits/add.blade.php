
@extends('home')
@section('content')
    <div class="container">
        <div class="row">
            
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="{{ url('/pd-adds') }}" method="post" enctype="multipart/form-data">
                    <h1 class="text text-center">ADD YOUR PRODUCTS !!!</h1>

                    @csrf
                    <div class="form-group">
                        <label for="categorie">Catégorie</label>
                          <select name="categorie_id" class="form-control select2" >
                              <option value="">Select a category!!</option>
                           @foreach($categories as $categorie)
                             <option value="{{ ($categorie->id) }}">{{ ($categorie->name) }}</option>
                           @endforeach
                           </select>
                        </div>
                    <div class="form-group">

                        <label for="">Currency</label>
                         <select name="currency_id" class="form-control select2" >
                             <option value="">Select a currency!!</option>
                          @foreach($currencies as $currency)
                             <option value="{{ ($currency->id) }}">{{ ($currency->name) }}</option>
                          @endforeach
                         </select>
                     </div>
                    <div class="form-group">

                        <label for="">Designation</label>
                        <input type="text" name="designation" class="form-control">
                        <span class="text-danger">{{ ($errors->has('designation')) ? $errors->first('designation') : '' }}</span>
                    </div>
                    <div class="form-group">
                        <label for="">P.Achat</label>
                        <input type="text" name="prixAchat" class="form-control">
                        <span class="text-danger">{{ ($errors->has('prixachat')) ? $errors->first('prixachat') : '' }}</span>
                    </div>
                    <div class="form-group">
                        <label for="">P.Vente</label>
                        <input type="text" name="prixVente" class="form-control">
                        <span class="text-danger">{{ ($errors->has('prixVente')) ? $errors->first('prixVente') : '' }}</span>
                    </div>
                    <div class="form-group">
                        <label for="">Image</label>
                        <input type="file" name="image" class="form-control">
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