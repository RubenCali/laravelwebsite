<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\blogs;

class AdminController extends Controller
{
    public function admin()
    {
        $blogs = blogs::all();
        return view('admin', ['blogs' => $blogs]);
    }
}
