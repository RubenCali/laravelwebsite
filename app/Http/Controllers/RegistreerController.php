<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistreerController extends Controller
{
    public function registreer(){
        return view('account.registreer');
    }
}
