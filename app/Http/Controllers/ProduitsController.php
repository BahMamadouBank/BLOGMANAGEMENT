<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;
use App\Produit;
use Illuminate\Support\Facades\Hash;

class ProduitsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produits=Produit::all();

        return view('pages.produits.liste')->with('produits',$produits);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories=DB::table('categories')->get();

        $currencies=DB::table('currencies')->get();

        return view('pages.produits.add')->with('categories',$categories)->with('currencies',$currencies);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'designation'  => 'required',
            'prixAchat'    => 'required',
            'prixVente'    => 'required',
            'currency_id'  => 'required',
            'categorie_id' => 'required',
            'image'     => 'required|image|nullable|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

       
        if($request->hasFile('image')){


          $imagePath = public_path('images/product'); 
        
          $ext  = $request->file('image')->getClientOriginalExtension();
          $name = $request->file('image')->getClientOriginalName();

          $name = Hash::make($name.date('Y-m-d H-i-s'));

          $name = str_replace('/', '', $name);

          $fullName = $name.'.'.$ext;
         

          $request->file('image')->move($imagePath, $fullName);
          
           
        }else{
            $fullName='https://via.placeholder.com/150';
        }

        DB::table('produits')->insert([

             'designation'   =>$request->designation,
             'currency_id'   =>$request->currency_id,
             'prixAchat'     =>$request->prixAchat,
             'prixVente'     =>$request->prixVente,
             'categorie_id'  => $request->categorie_id,
             'image'         => $fullName
        ]);
      
        return back()->with('succes','Enregistré');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$categorie=DB::table('categories')->where('id',$id)->first();
        $produit=Produit::find($id);

        if(!$produit){
            return back();
        }

        return view('pages.produits.single')->with('produit',$produit);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       // $categorie=DB::table('categories')->where('id',$id)->first();
        
       $categories=DB::table('categories')->get();

       $produit=Produit::find($id);

        if(!$produit){
            return back();
        }

        return view('pages.produits.edit')->with('produit',$produit);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'        => 'required',
            'description' => 'required',
        ]);

        DB::table('categories')->where('id',$id)->update([

             'name'=>$request->name,
             'description'=>$request->description
        ]);
      
        return back()->with('succes','Modifiée');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       DB::table('produits')->where('id',$id)->delete();

       return back()->with('succes','Supprimé');
    }
}
