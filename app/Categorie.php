<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    public function articles(){
        
        return $this->hasMany('App\Article');
    }
     
    public function produits(){
        return $this->hasMany('App\Produit');
    }
}
