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
            @foreach($produits as $produit)
                <div class="well">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                        <img src="{{ asset('images/product/'.$produit->image) }}" alt="Product Image" style="width: 100%"> 

                        </div>
                        <div class="col-md-4 col-sm-4">
                             <h1><a href="{{ url('pd-show', $produit->id) }}">{{ ($produit->designation) }}</a></h1>
                            <p>
                                <span>Prix Achat</span>{{($produit->prixAchat) }}
                            </p>
                            <p>
                               <span>Prix Vente</span> {{($produit->prixVente) }}
                            </p>
                                <span>Created at {{($produit->created_at) }}</span><br>
                                Catégorie <span>{{($produit->categorie->name)}}</span>
                            <p>
                                <a class="btn btn-warning" href="{{url('pd-edit', $produit->id) }}">Edit</a>
                                <a class="btn btn-danger" href="{{url('pd-destroy', $produit->id) }}">Delete</a>
                            </p>
                        </div>
                    
                    </div>
                
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection