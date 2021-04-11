<?php

namespace App\Http\Controllers;

use App\Models\comment;
use Illuminate\Http\Request;
use App\Models\post;
use App\Models\User;
use App\Models\like;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class profileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = user::find(auth()->user()->id);
        return view('profile')->with('user', $user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = user::find($id);
        $pos = post::where('author_id', $id)->get();
        $comment = comment::where('post_author_id', $id)->get();
        $like = like::where('post_author_id', $id)->get();
        if ($user == NULL) {
            return view('error')->with('message', 'No User Found');
        } else {
            return view('pprofile')->with('user', $user)->with('pos', $pos)->with('comment', $comment)->with('like', $like);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = auth()->user()->id;
        $u = User::find($id);
        $u->name = $request['name'];
        $u->email = $request['email'];
        $u->password = Hash::make($request['password']);
        $u->save();
        return view('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $account = user::find($id);
        $account->delete();
        if (user::all() == NULL) {
            return redirect()->to('/register');
        } else {
            return redirect()->to('/');
        }
    }
}