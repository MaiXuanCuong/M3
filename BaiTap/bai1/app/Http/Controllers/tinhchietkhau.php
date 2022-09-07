<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tinhchietkhau extends Controller
{
    //
    function index(){
        return view('tinhchietkhau');
    }
    function calculate(Request $request){
        $name = $request->name;
        $price = $request->price;
        $discount = $request->discount;
        $result= $price * $discount / 100;
        $result1 = $price - $result;

        return view('tinhchietkhau', compact('name', 'price', 'discount', 'result','result1'));
    }
}
