<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class homepageController extends Controller
{
    public function homepage(){
        $blogs = DB::select('select * from blogs');
return view('homepage',['blogs'=>$blogs]);
}
}