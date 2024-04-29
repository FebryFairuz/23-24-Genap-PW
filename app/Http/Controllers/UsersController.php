<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function index()
    {
        $users = Users::all(); //select * from users
        return view("pertemuan-7.admin_temp.users.index")->with([
            'users'=>$users
        ]);
    }

    public function create() {
        return view("pertemuan-7.admin_temp.users.create");
    }

    public function store(Request $request) {
        //dd($request->all());
        //insert into  table users (name, email, password) values ('John Doe', 'john@gmail
        $result = Users::create($request->all());
        return redirect()->to('users-books');
    }
}
