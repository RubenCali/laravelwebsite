<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogDetailController extends Controller
{
    public function blogDetail(){
  
        return view('blogs.blog-detail');
    }
}
