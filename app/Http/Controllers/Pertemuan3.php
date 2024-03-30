<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pertemuan3 extends Controller
{
    public function index() {
        return view('Pertemuan-3');
    }

    public function p3(){
        return "ini halaman p3";
    }

    public function soal7(){
        //$mahasiswa2 = array("id" => 1, "name" => "Isnan", "weight"=>88.9, "height"=>170);
        $menu = array();
        $menu[] = array("id"=>1, "name"=>"Home", "url"=>"/pertemuan-3"); //$item
        $menu[] = array("id"=>2, "name"=>"Profile", "url"=>"/pertemuan-4");//$item
        $menu[] = array("id"=>3, "name"=>"Menu 3", "url"=>"/soal-7");//$item

        return view('Soal-7')->with('daftar_menu',$menu);
    }

    public function saveSoal7(Request $request){
        var_dump($request['npm']);
    }
}
