<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\post;

class postController extends Controller
{
    public function index()
  {
      $postsPublished = post::where('published', '1')->get();
      // dd($articles);
      return view('posts.index', compact('postsPublished'));
  }
}
