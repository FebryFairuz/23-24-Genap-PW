<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KAPertemuan4 extends Controller
{
    public function index(){
        return "Hi";
    }

    public function p4(){
        $name = "Bayu";
        $npm = 222310007;
        $weight = 80.8;

        //object
        $mahasiswa = array("student_id" => $npm, "fullname" => $name );

        //return "Ini pertemuan 4 ". $name;
        //cara memanggil file script HTML / blade
        return view('KAPertemuan4')->with('mahasiswa', $mahasiswa);
    }

}
