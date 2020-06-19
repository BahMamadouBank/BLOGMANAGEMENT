<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    public function produits(){
        $this->belongsToMany('App\Produit');
    }
}
