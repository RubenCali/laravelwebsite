<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\blogs;

class homepageController extends Controller
{
    public function homepage()
    {
        // $blogs = blogs::all();
        $blogs = blogs::paginate(9);
        return view('homepage', ['blogs' => $blogs]);
    }
}
