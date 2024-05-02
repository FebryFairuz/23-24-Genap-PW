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
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $file= $request->file('image');
            $newFilename = time()."-".preg_replace('/\s+/', '-', $request->username).".jpg";
            $file->move(public_path('./assets/media/uploads/users'), $newFilename);
        }
        $dataPost = array(
            'username' => $request->username,
            'fullname' => $request->fullname,
            'gender' => $request->gender,
            'email' => $request->email,
            'password' => $request->password,
            'no_hp' => $request->no_hp,
            'image' => $newFilename
        );
        $result = Users::create($dataPost);
        // $result = Users::create($request->all());
        if($result){
            $message = "Successfully saved";
        }else{
            $message = "Failed save";
        }
        return redirect()->to('users-books')->withErrors('info', $message);
        // return redirect()->to('users-books');
    }

    public function destroy(Users $users){
        $users->delete($users->id);
        return redirect()->to('users-books');
    }

    public function edit($id) {
        $user = Users::find($id);
        // ... (rest of the function remains the same)
        $selectedGender = $user->gender;

        return view("pertemuan-7.admin_temp.users.edit", compact('user', 'selectedGender'));
    }

    public function update(Request $request, Users $users) {
        //dd($request->all());
        //insert into  table users (name, email, password) values ('John Doe', 'john@gmail
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $file= $request->file('image');
            $newFilename = time()."-".preg_replace('/\s+/', '-', $request->username).".jpg";
            $file->move(public_path('./assets/media/uploads/users'), $newFilename);
        }
        $dataPost = array(
            'username' => $request->username,
            'fullname' => $request->fullname,
            'gender' => $request->gender,
            'email' => $request->email,
            'password' => $request->password,
            'no_hp' => $request->no_hp,
            'image' => $newFilename
        );
        $result = $users->update($dataPost);
        // $result = Users::create($request->all());
        if($result){
            $message = "Successfully saved";
        }else{
            $message = "Failed save";
        }
        return redirect()->to('/users-books')->withErrors('info', $message);
        // return redirect()->to('users-books');
    }

    // public function update(Request $request, $id)
    // {
    //     $user = Users::find($id);

    //     if (!$user) {
    //         return redirect()->back()->withErrors('User not found!');
    //     }

    //     // Validate form data (optional)
    //     $validatedData = $request->validate([
    //         'username' => 'required|string|max:255',
    //         'email' => 'required|email|unique:users,email,'.$user->id, // Exclude current user ID
    //         'image' => 'nullable|image|max:2048', // Add validation for image file
    //         // ... other validation rules ...
    //     ]);

    //     // Handle image upload
    //     if ($request->hasFile('image')) {
    //         $imageFilename = $request->file('image')->getClientOriginalName(); // Get original filename
    //         $imageName = time().'_'.$imageFilename; // Generate unique filename

    //         // Store image in 'assets/media/uploads/users' directory using move method
    //         $request->file('image')->move(public_path('assets/media/uploads/users'), $imageName);

    //         // Update image path in database
    //         $validatedData['image'] = $imageName; // Store new image name in validated data
    //     }

    //     $user->update($validatedData); // Update user data

    //     return redirect()->route('/users-books')->with('success', 'User updated successfully!');
    // }

}
