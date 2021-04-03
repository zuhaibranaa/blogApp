<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use App\Models\User;


class postsController extends Controller
{
    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user()->id;
        $pos = post::where('author_id', $user)->get();
        return view('posts')->with('pos', $pos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = auth()->user()->id;
        $post = new post;
        $post->title = $request['title'];
        $post->author_id = $user;
        $post->posted_at = $request['posted_at'];
        $post->content = $request['body'];
        $post->save();
        return view('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pos = post::find($id);
        $a = $pos['author_id'];
        $author = User::find($a);
        return view('posts.post')->with('pos', $pos)->with('user', $author['name']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = auth()->user()->id;
        $post = post::find($id);
        $a = $post['author_id'];
        $author = User::find($a);
        if ($post['author_id'] == $user) {
            return view('posts.edit')->with('post', $post)->with('author', $author['name']);
        } else {
            return view('error')->with('message', 'Permission Denied');
        }
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
        $post = post::find($id);
        $post->title = $request['title'];
        $post->content = $request['body'];
        $post->save();
        return view('/dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = post::find($id);
        $post->delete();
        return view('dashboard');
    }
}