<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\CreateProductRequest;
use App\Http\Requests\UpdateProductRequest;
use RealRashid\SweetAlert\Facades\Alert;

class ProductController extends Controller
{
    public function index(){
        $items = Product::paginate(3);
        $count = Product::all();
        $params =[
            'items' => $items,
            'count' => $count
        ];
        return view('index', $params);
    }

    public function create(){
        $categorys = Category::all();
        $authors = Author::all();
        $params =[
            'categories' => $categorys,
            'authors' => $authors,
        ];
        return view('add', $params);
    }
    public function store(CreateProductRequest $request){
        $products = new Product();
        $products->name = $request->name;
        $products->ISBN = $request->ISBN;
        $products->author_id = $request->author_id;
        $products->category_id = $request->category_id;
        $products->pages = $request->pages;
        $products->years = $request->years;
        $products->save(); 
        try {
            // dd($request->all());
        Alert::success('Thêm Sách '.$request->name, 'Thành Công');
        return redirect()->route('index');
        } catch (\Exception $th) {
        Alert::error('Thêm Sách '.$request->name, 'Không Thành Công');
        return back()->withInput();
        }
    }
    public function edit($id){
        $item = Product::find($id);
        $categories = Category::all();
        $authors = Author::all();
        $params = [
            'item' => $item,
            'categories' => $categories,
            "authors" => $authors,
        ];
        return view('edit', $params);
    }
    public function update(UpdateProductRequest $request,$id){
        $products = Product::findOrFail($id);
        $products->name = $request->name;
        $products->ISBN = $request->ISBN;
        $products->author_id = $request->author_id;
        $products->category_id = $request->category_id;
        $products->pages = $request->pages;
        $products->years = $request->years;
        try {
        $products->save();
        Alert::success('Lưu Sách '.$request->name, 'Thành Công');
        return redirect()->route('index');
        } catch (\Exception $th) {
            Alert::error('Lưu Sách '.$request->name, 'Không Thành Công');
        return back()->withInput();
        }
    }
    public function delete($id){
        $item = Product::findOrFail($id);
        try {
            $item->delete();
            Alert::success('Xóa Sách '.$item->name, 'Thành Công');
        return redirect()->route('index');
        } catch (\Exception $th) {
            Alert::error('Xóa Sách '.$item->name, 'Không Thành Công');
            return redirect()->route('index');
        }
    }
}
