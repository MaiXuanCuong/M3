<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    function index(){
        return view('dangnhap');
    }
    function check(Request $request){
        $account = $request->account;
        $password = $request->password;
        if($account == 'admin' && $password == 'admin'){
            $b = "Hello Admin";
        } else {
            $b = "Tài khoản or mật khẩu không đúng";
        }
        return view('dangnhap',compact('b'));
    }
    //
}
