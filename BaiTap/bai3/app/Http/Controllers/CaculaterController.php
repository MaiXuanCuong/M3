<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaculaterController extends Controller
{
    //
    function caculaterController(Request $request){
      switch ($request->calculation) {
        case '+':
            $result = $request->numberOne + $request->numberTwo;
            break;
        case '-':
            $result = $request->numberOne - $request->numberTwo;
            break;
        case '*':
            $result = $request->numberOne * $request->numberTwo;
            break;
        case '/':
            $result = $request->numberOne / $request->numberTwo;
            break;
        default:
        $result = "Không có Phép TÍnh";
            break;
      }
      return view('caculater', compact('result'));
    }
}
