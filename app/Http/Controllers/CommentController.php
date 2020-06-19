<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;
use App\Comment;

class CommentController extends Controller
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
        $comments=DB::table('comments')->get();

        return view('pages.comment.liste')->with('comments',$comments);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $articles=DB::table('articles')->get();

        return view('pages.comment.add')->with('articles',$articles);
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
            'comment'        => 'required',
            'article_id'      => 'required',
        ]);

        DB::table('comments')->insert([

             'comment'        =>$request->comment,
             'article_id'      =>$request->article_id
 
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
        $comment=DB::table('comments')->where('id',$id)->first();

        if(!$comment){
            return back();
        }

        return view('pages.comment.single')->with('comment',$comment);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comment=DB::table('comments')->where('id',$id)->first();

        if(!$comment){
            return back();
        }

        return view('pages.comment.edit')->with('comment',$comment);
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
            'comment'   => 'required'
        ]);

        DB::table('comments')->where('id',$id)->update([

              
             'comment' => $request->comment
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
       DB::table('comments')->where('id',$id)->delete();

       return back()->with('succes','Supprimé');
    }
}
