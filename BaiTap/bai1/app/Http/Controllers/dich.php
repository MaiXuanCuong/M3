<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dich extends Controller
{
    //
    function index(){
        return view('dich');
    }
    function translate(Request $request){
        $words = $request->words;
        $a = ['hai'=> 'deptrai', 'cuong' => 'copy'];
        if(isset($a[$words])){
            $b= $a[$words];
        } else {
            $b = "Khong co";
        }
        return view('dich', compact('b','words'));
    }
}
