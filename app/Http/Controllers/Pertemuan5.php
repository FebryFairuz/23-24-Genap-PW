<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pertemuan5 extends Controller
{
    public function index(){
        return view('pertemuan-5.Pertemuan5');
    }

    public function LatihanPB(){
        $Mahasiswa[] = array("nama"=>"Fajar", "npm"=>"222310050");
        $Mahasiswa[] = array("nama"=>"Shopie", "npm"=>"222310062");
        $Mahasiswa[] = array("nama"=>"Faqih", "npm"=>"222310047");

        return view('pertemuan-5.P5LatihanPB')->with('mahasiswa', $Mahasiswa);

    }

    public function LatihanPA(){
        return view('pertemuan-5.P5LatihanPA');
    }

}
