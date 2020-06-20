<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\commande;

class CommandeController extends Controller
{
    public function index()
    {
        return view('pages.commande.index'); 
    }

    public function store(Request $request)
    {

    }
    public function list()
    {
        $commande = Commande::all();
        return view('pages.commande.list')->with('commande',$commande);
    }

}
