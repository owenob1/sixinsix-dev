<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
class BlogController extends Controller
{
  public function index(){
      $blog = Blog::whereRaw(true)->paginate('15');
    return view('frontend.blog')->with(['blog' => $blog]);
  }
  public function item($slug) {
      $slug = str_replace("-"," ", $slug);
      $blog =Blog::where('title', $slug)->first();
//      $blog = Blog::findOrFail($slug);
      return view('frontend.blogItem')->with(['blog' => $blog]);
  }
}
