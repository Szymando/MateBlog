<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;
use App\Comment;

class IndexController extends Controller
{
    public function index(){
      $posts = Post::paginate(10);
      return view('index.index', compact('posts'));
    }
    public function showPost(Post $post, Comment $comment){
      return view('index.showPost', compact('post', 'comment'));
    }
}
