<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        echo __METHOD__;
    }

    public function edit($id){

    }

    public function create(){
        return view('products.create');
    }

    public function store(Request $request){
        dd($request->all());
    }
}
