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
                'naam' => 'required|max:30|regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/',
                'email' => 'required|email:rfc,dns',
                'onderwerp' => 'nullable|max:40',
                'bericht' => 'required|min:25|max:255',
            ]
        );
        dd($data);
    }
}
