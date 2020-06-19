<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;

class ArticlesController extends Controller
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
        $articles=DB::table('articles')->get();

        return view('pages.articles.liste')->with('articles',$articles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=DB::table('categories')->get();

        return view('pages.articles.add')->with('categories',$categories);
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
            'title'        => 'required',
            'content'      => 'required',
            'date'         => 'required',
            'categorie_id' => 'required'
        ]);

        DB::table('articles')->insert([

             'title'        =>$request->title,
             'content'      =>$request->content,
             'date'         => $request->date,
             'categorie_id' => $request->categorie_id
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
        $article=DB::table('articles')->where('id',$id)->first();

        if(!$article){
            return back();
        }

        return view('pages.articles.single')->with('article',$article);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article=DB::table('articles')->where('id',$id)->first();

        if(!$article){
            return back();
        }

        return view('pages.articles.edit')->with('article',$article);
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
            'title'     => 'required',
            'content'   => 'required',
            'date'      => 'required',
        ]);

        DB::table('articles')->where('id',$id)->update([

             'title'   =>$request->title,
             'content' =>$request->content,
             'date'    =>$request->date
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
       DB::table('articles')->where('id',$id)->delete();

       return back()->with('succes','Supprimé');
    }
}
