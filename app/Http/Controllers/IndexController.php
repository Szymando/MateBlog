<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;

class IndexController extends Controller
{
    public function index(){
      $posts = Post::paginate(10);
      return view('index.index', compact('posts'));
    }
    public function showPost(Post $post){
      return view('index.showPost', compact('post'));
    }
    public function aboutUs(){
      return view('topbar.aboutUs');
    }
    public function contact(){
      return view('topbar.contact');
    }
}
