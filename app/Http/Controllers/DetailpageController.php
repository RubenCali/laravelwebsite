<?php

namespace App\Http\Controllers;
use DB;
use App\Http\Controllers\Controller;
use App\blogs;

use Illuminate\Http\Request;

class DetailpageController extends Controller
{
 
    public function viewBlog(Request $request, $id){
              $detailpage = blogs::all()->where('id', $id);

        return view("blogs.detailpage", ['detailpage' => $detailpage ]);

    }
  
}
