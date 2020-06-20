
@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
        
            <div class="col-md-12">
                <form action="{{ url('/art-adds') }}" method="post">

                    @csrf()

                    <div class="form-group">
                        <label for="">Date</label>
                        <input type="date" name="date" class="form-control">
                        <span class="text-danger">{{ ($errors->has('date')) ? $errors->first('date') : '' }}</span>
                    </div>
                    <div class="form-group">
                        <label for="categorie">Catégorie</label>
                          <select name="categorie_id" class="form-control select2" >
                           @foreach($categories as $categorie)
                             <option value="{{ ($categorie->id) }}">{{ ($categorie->name) }}</option>
                           @endforeach
                           </select>
                        </div>
                    <div class="form-group">
                        <label for="">Article</label>
                        <input type="text" name="title" class="form-control">
                        <span class="text-danger">{{ ($errors->has('title')) ? $errors->first('title') : '' }}</span>
                    </div>
                    <div class="form-group">
                        <label for="">Content</label>
                        <textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>
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