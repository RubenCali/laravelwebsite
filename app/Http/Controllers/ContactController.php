<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(){
        return view('contact.form');
    }
    public function handleForm(Request $request){
        $data = $request->validate(
            [
                'naam' => 'required|min:8'
            ]
        );
        dd($data);
    }
}
