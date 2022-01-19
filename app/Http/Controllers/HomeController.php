<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('index');
    }

    public function classes($job){
        return view('classes', compact('job'));
    }
}
//Linhas 7 á 16 #05