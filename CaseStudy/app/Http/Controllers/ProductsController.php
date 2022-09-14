<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{
    //
    public function index(){
        $items = Product::all();
        return view('admin.products.index', compact('items'));
    }
    public function create(){
        $categories = Category::all();
        return view('admin.products.add', compact('categories'));
    }
    
    public function store(Request $request){
        
        $products = new Product();
        $products->name = $request->name;
        $products->price = $request->price;
        $products->describe = $request->describe;
        // dd($request);
        $products->configuration = $request->configuration;
        $products->quantity = $request->quantity;
        $products->specifications = $request->specifications;

        // $products->image = $request->inputFile ;
        // $request->file('inputFile')->store('public/images');
        $fieldName = 'inputFile';
        if ($request->hasFile($fieldName)) {
            $fullFileNameOrigin = $request->file($fieldName)->getClientOriginalName();
            $fileNameOrigin = pathinfo($fullFileNameOrigin, PATHINFO_FILENAME);
            $extenshion = $request->file($fieldName)->getClientOriginalExtension();
            $fileName = $fileNameOrigin . '-' . rand() . '_' . time() . '.' . $extenshion;
            $path = 'storage/' . $request->file($fieldName)->storeAs('public/images', $fileName);
            $path = str_replace('public/', '',$path);
            $products->image = $path;
        }

        $products->color = $request->color;
        $products->price_product = $request->price_product;
        $products->garbage_can = 1;
        $products->category_id = $request->category_id;
        $products->save();
         Session::flash('success', 'Thêm thành công '.$request->name);
        return redirect()->route('products');
    }
    public function edit($id){
        $item = Product::find($id);
        $categories = Category::all();
        return view('admin.products.edit',compact('item','categories'));
    }
    public function update(Request $request, $id){
        // dd($request->name);
        $products = Product::find($id);
        $products->name = $request->name;
        $products->price = $request->price;
        $products->describe = $request->describe;
        $products->configuration = $request->configuration;
        
        // dd($request);
        $products->quantity = $request->quantity;
        $products->specifications = $request->specifications;
        $fieldName = 'inputFile';

        if ($request->hasFile($fieldName)) {
            $fullFileNameOrigin = $request->file($fieldName)->getClientOriginalName();
            $fileNameOrigin = pathinfo($fullFileNameOrigin, PATHINFO_FILENAME);
            $extenshion = $request->file($fieldName)->getClientOriginalExtension();
            $fileName = $fileNameOrigin . '-' . rand() . '_' . time() . '.' . $extenshion;
            $path = 'storage/' . $request->file($fieldName)->storeAs('public/images', $fileName);
            $path = str_replace('public/', '',$path);
            $products->image = $path;
        } 

        $products->color = $request->color;
        $products->price_product = $request->price_product;
        $products->garbage_can = 1;
        $products->category_id = $request->category_id;
        $products->save();
        Session::flash('success', 'Chỉnh sửa thành công '.$request->name);
        return redirect()->route('products');
    }
    public function destroy($id){
        $item = Product::findOrFail($id);
        $images = str_replace('storage' , 'public', $item->image );;
        // dd($images);
        Storage::delete($images);
        $item->delete();

        Session::flash('success', 'Xóa thành công '.$item->name);
        return redirect()->route('products');
    }
}
