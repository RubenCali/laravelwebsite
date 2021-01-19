<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogPostenController extends Controller
{
    public function blogPosten(){
        return view('blogs.blog-posten');
    }
    public function postHandle(Request $request){
        $data = $request->validate(
            [
                'naam' => 'required|max:30|regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/',
                'foto' => 'required|image',
            ]
        );
        dd($data);
    }
}
