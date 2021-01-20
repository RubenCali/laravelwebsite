<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\blogs;
class OverzichtController extends Controller
{
    public function overzicht()
    {
        // $blogs = blogs::all();
        $blogs = blogs::all();
        return view('overzicht', ['blogs' => $blogs]);
    }
}
