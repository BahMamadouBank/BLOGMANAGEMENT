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
                <div class="well">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                             
                        <img src="/storage/image/{{$produit->image}}" alt="Product Image" style="width: 100%"> 

                        </div>
                        <div class="col-md-4 col-sm-4">
                             <h1>{{ ($produit->designation) }}</h1>
                            <p>
                                {{($produit->prixAchat) }}
                            </p>
                            <p>
                                {{($produit->prixVente) }}
                            </p>
                                <span>Created at {{($produit->created_at) }}</span><br>
                                Catégorie <span>{{($produit->categorie->name)}}</span>
                             
                        </div>
                    
                    </div>
                
                </div>
        </div>
    </div>
</div>
@endsection