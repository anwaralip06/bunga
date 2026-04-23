<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dashboard(){
        return view('home');    //nama file .blade.php
    }

    public function welcome(Request $request){
        $data = $request->all();
        return view('welcome', compact('data'));    //nama file .blade.php
    }
}
