<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index(){
        //echo Hash::make("123456");
        return view('pertemuan-7.auth.SignIn');
    }

    public function store(Request $request):RedirectResponse{
        $credentials = $request->validate([
            'email' => ['required', 'email:dns'],
            'password' => ['required'],
        ]);


       // $credentials['password'] = md5($credentials['password']);
        $credentials = $request->only('email', 'password');

        //jika berhasil
        if (Auth::attempt($credentials)) {
            //$request->session()->regenerate();
            dd("berhasil");
            //return redirect()->intended('dashboard');
        }

        //jika gagal
        return back()->with('info','The provided credentials do not match our records.');
    }


    function signout(Request $request):RedirectResponse{
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/sign-in');
    }
}
