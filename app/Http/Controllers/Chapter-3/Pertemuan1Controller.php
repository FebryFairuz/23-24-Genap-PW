<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pertemuan1Controller extends Controller
{
    public function index()
    {
        //return 'hi';
        return view('Latihan_1');
    }

    public function test()
    {
        return 'hi test';
    }
    public function soal6()
    {
        //222310015-Risma
        $data_programming_language = array();
        $data_programming_language[]  = array("id" => 1, "name" => "phyton", "url" => "/pertemuan-1");
        $data_programming_language[] = array("id" => 2, "name" => "java script", "url" => "/pertemuan-2");
        return view('soal-6')->with("data", $data_programming_language);
    }
}
