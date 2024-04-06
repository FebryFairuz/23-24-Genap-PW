<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pertemuan6 extends Controller
{
    public function index()
    {
        return view('pertemuan-6.P6Task');
    }
    public function signInPB()
    {
        return view('pertemuan-6.P6PBSignIn');
    }

    public function signInPA()
    {
        return view('pertemuan-6.P6PASignIn');
    }

    public function postSignIn(Request $dataForm)
    {
        // echo "Email:" . $dataForm['email'];
        // echo "Password:" . $dataForm['password'];
        //var_dump($dataForm);
        dd($dataForm['email'], $dataForm['password']);
        //dd($dataForm);
    }
}
