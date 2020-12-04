<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogPostenController extends Controller
{
    public function blogPosten(){
        return view('blogs.blog-posten');
    }
}
