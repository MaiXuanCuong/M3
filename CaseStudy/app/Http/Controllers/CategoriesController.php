<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoriesController extends Controller
{
    //
    public function index(){
        $items = Category::all();
        return view('admin.categories.index', compact('items'));
    }
    public function create(){
        return view('admin.categories.add');
    }
    
    public function store(Request $request){
        
        $categories = new Category();
        $categories->name = $request->name;
        $categories->save();
        return redirect()->route('/');
    }
    public function edit($id){
        $item = Category::find($id);
        return view('admin.categories.edit',compact('item'));
    }
    public function update(Request $request, $id){
        $item = Category::find($id);
        $item->name = $request->name;
        $item->save();
        return redirect()->route('/');
    }
    public function destroy($id){
        $item = Category::findOrFail($id);
        $item->delete();
        return redirect()->route('/');
    }
}
