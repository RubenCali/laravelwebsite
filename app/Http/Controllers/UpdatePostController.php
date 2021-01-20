<?php

namespace App\Http\Controllers;
use App\BlogUpdate;
use App\blogs;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class UpdatePostController extends Controller
{
 
    public function update(Request $request, $id){
              $detailpage = blogs::all()->where('id', $id);

        return view("blogs.update-post", ['detailpage' => $detailpage ]);

    }
   
    public function update_post(Request $req){
        //  return $req->input();
        $data = BlogUpdate::find($req->id);
        $data->titel = $req->titel;
        $data->autheur = $req->autheur;
        $data->shortDES = $req->shortDES;
        $data->longDES = $req->longDES;
        $data->datum = $req->datum;
        $data->plaats = $req->plaats;
        $data->image = $req->image;
        $data->save();
        return redirect('/admin');
      

    }
}
