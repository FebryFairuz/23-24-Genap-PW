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
        return view("final-apps.admin_temp.users.index")->with([
            'users'=>$users
        ]);
    }

    public function create() {
        return view("final-apps.admin_temp.users.create");
    }

    public function store(Request $request) {
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $file= $request->file('image');
            $newFilename = time()."-".preg_replace('/\s+/', '-', $request->username).".jpg";
            $file->move(public_path('./assets/media/uploads/users'), $newFilename);
        }
        $user = new Users;
        $user->username = $request->username;
        //$user->password = md5($request->password);
        $user->password = $request->password;
        $user->fullname = $request->fullname;
        $user->email = $request->email;
        $user->no_hp = $request->no_hp;
        $user->gender = $request->gender;
        $user->image = $newFilename;
        $result = $user->save();
        $message = $result ? "Successfully saved" : "Failed save";
        return redirect()->to('users-books')->with('info', $message);
    }

    public function destroy(Users $users){
        $users->delete($users->id);
        return redirect()->to('users-books');
    }

    public function edit($id) {
        $user = Users::find($id);
        $selectedGender = $user->gender;

        return view("final-apps.admin_temp.users.create", compact('user', 'selectedGender'));
    }

    public function update(Request $request, Users $users) {
        $data = $request->except('_token','password');
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $file= $request->file('image');
            $newFilename = time()."-".preg_replace('/\s+/', '-', $request->username).".jpg";
            $data['image'] = $newFilename ;
            $file->move(public_path('./assets/media/uploads/users'), $newFilename);
        }

        $result = $users->where("id", $users->id)->update($data);

        $message = $result ? "Successfully saved" : "Failed save";
        return redirect()->to('users-books')->with('info', $message);
    }
}
