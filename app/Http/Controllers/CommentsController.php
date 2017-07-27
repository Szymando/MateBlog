<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\User;
use TCG\Voyager\Models\Post;
use Session;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request, $post_id)
    {
        $this->validate($request, array(
          'name' => 'required|max:255',
          'email' => 'required|max:255',
          'content' => 'required|min:5|max:2000'
        ));

        $post = Post::find($post_id);
        $user = new User();
        $comments = new Comment();

        $comments->name = $request->name;
        $comments->email = $request->email;
        $comments->content = $request->content;
        $comments->approved = true;
        $comments->postId()->associate($post);
        if($comments->email == $user->email){
          Session::flash('danger', 'E-mail, that u trying to use, is already registered');
          return redirect()->route('index.showPost' ,[$post->id]);
        }else {
        $comments->save();
        Session::flash('success', 'Comment was added');
        return redirect()->route('index.showPost' ,[$post->id]);
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
