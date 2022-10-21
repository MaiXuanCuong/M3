<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index()
    {
        $items = Product::all();
        return response()->json($items,200);
    }
    public function store(Request $request)
    {
        $products = new Product();
        $products->name = $request->name;
        $products->price = $request->price;
        $products->description = $request->description;
        $products->save();
        return response()->json($products, 200);
    }
    public function edit($id)
    {
        $item = Product::find($id);
        return response()->json($item, 200);
    }
    public function update(Request $request, $id)
    {
        $products = Product::find($id);
        $products->name = $request->name;
        $products->price = $request->price;
        $products->description = $request->description;
        $products->save();
        return response()->json($products,200);
    }
    public function destroy($id)
    {
        $item = Product::findOrFail($id);
        $item->delete();
        return response()->json($item,200);
        
    }

   



}
