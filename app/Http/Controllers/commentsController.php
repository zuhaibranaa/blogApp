<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use App\Models\comment;

class commentsController extends Controller
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
        $user = auth()->user()->id;
        $comment = comment::where('post_author_id', $user)->get();
        $post = post::all();
        return view('comments')->with('comment', $comment)->with('post', $post);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $comment = new comment;
        $comment->author_id = auth()->user()->id;
        $comment->post_author_id = $request['post_author_id'];
        $comment->content = $request['content'];
        $comment->post_id = $request['post_id'];
        $comment->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comment = comment::find($id);
        $comment->delete();
        return back();
    }
}