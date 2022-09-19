<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class UserController extends Controller
{
    public function index()
    {
        return view('users.index');
    }

    public function search(Request $request)
{
    {
        try {
            $user = User::findOrFail($request->input('user_id'));
        } catch (ModelNotFoundException $exception) {
            return back()->withErrors($exception->getMessage())->withInput();
        }

        return view('users.search', compact('user'));
    }
}
    
}
