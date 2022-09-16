<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Aler;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductsController extends Controller
{
    //
    public function index(){
        $items = Product::all();

        // dd($items[0]->category->name);
        // $items = Product::all();
        return view('admin.products.index', compact('items'));
    }
    public function create(){
        $categories = Category::all();
        return view('admin.products.add', compact('categories'));
    }
    
    public function store(StoreProductRequest $request){
        // $array = $request->toArray();
        // if(count($array) == 11){
            // dd($request->toArray());
        
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
        if($products->save()){
            // alert()->success('Thêm Sản Phẩm: '.$request->name, 'Thành Công');
            toast('Your Post as been submited!','success','top-right');
        // }
        //  Session::flash('success', 'Thêm thành công '.$request->name);
        return redirect()->route('products');
    } else {
        alert()->error('Thêm Sản Phẩm: '.$request->name, 'Không Thành Công!');
        // return redirect()->route('products.add');
    }
    }
    public function edit($id){
        $item = Product::find($id);
        $categories = Category::all();
        return view('admin.products.edit',compact('item','categories'));
    }
    public function update(UpdateProductRequest $request, $id){
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
            $item = Product::findOrFail($id);
            if(isset($item->image)){
                $images = str_replace('storage' , 'public', $item->image );
                Storage::delete($images);
            }
        } 

        $products->color = $request->color;
        $products->price_product = $request->price_product;
        $products->garbage_can = 1;
        $products->category_id = $request->category_id;
        $products->save();
        // Session::flash('success', 'Chỉnh sửa thành công '.$request->name);
        if($products->save()){
            alert()->success('Lưu Sản Phẩm: '.$request->name, 'Thành Công');
        } else {
            alert()->error('Lưu Sản Phẩm: '.$request->name, 'Không Thành Công!');
        }
        return redirect()->route('products');
    }
    public function destroy($id){
        $item = Product::findOrFail($id);
        $images = str_replace('storage' , 'public', $item->image );;
        // dd($images);
        Storage::delete($images);
        try {
            $item->delete();
            alert()->success('Xóa Sản Phẩm: '.$item->name, 'Thành Công');
        } catch (\Exception $e) {
            alert()->error('Xóa Sản Phẩm: '.$item->name, 'Không Thành Công!');
            return redirect()->route('products');
        }
        // Session::flash('success', 'Xóa thành công '.$item->name);
        return redirect()->route('products');
    }
}
