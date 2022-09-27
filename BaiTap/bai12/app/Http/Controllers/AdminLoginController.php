<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function viewlogin(){
        return view('login');
    }
    public function viewregister(){
        return view('register');
    }
    public function checklogin(Request $request){
        $arr=[
            'email'=>$request->email,
           'password'=>$request->password
        ];
    //    dd($arr);
        if(Auth::attempt($arr))
        {
            $mess= 'THành Công';
            return redirect()->route('viewlogin',compact('mess'));

        }else{
            $mess= 'không THành Công';

            return redirect()->route('viewlogin',compact('mess'));
        }
    }
    public function register(Request $request){
        $admin = new User();
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = bcrypt($request->password);
        try {
            if($request->password == $request->password1){
                $admin->save();
                return view('login');
            } else {
                return redirect()->route('viewlogin');
            }
        } catch (\Exception $e) {
            return redirect()->route('viewlogin');
        }
    }
}
