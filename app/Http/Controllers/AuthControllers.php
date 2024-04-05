<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthControllers extends Controller
{
    public function signIn(){
        return view('pertemuan-6.SignIn');
    }
}
