<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
  public function show()
  {
      $posts = Post::all();

//      return $posts;
      return view('posts',['posts' => $posts]);
  }
}
