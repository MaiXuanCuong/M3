<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Aler;

class CategoriesController extends Controller
{
    //
    public function home(){

        // $items = Category::all();
        // return view('index',compact('items'));
        return view('index');
    }
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
        // Session::flash('success', 'Thêm thành công '.$request->name);
        if($categories->save()){
            alert()->success('Thêm Danh Mục: '.$request->name,'Thành Công');
        } else {
            alert()->error('Thêm Danh Mục: '.$request->name, 'Không Thành Công!');
        }
        return redirect()->route('categories');
    }
    public function edit($id){
        $item = Category::find($id);
        return view('admin.categories.edit',compact('item'));
    }
    public function update(Request $request, $id){
        $item = Category::find($id);
        $item->name = $request->name;
        $item->save();
        if($item->save()){
            alert()->success('Lưu Danh Mục: '.$request->name,' Thành Công');
            // alert('Title','Lorem Lorem Lorem', 'success');
            // alert()->info('Title','Lorem Lorem Lorem');
            // alert()->warning('Title','Lorem Lorem Lorem');
            // alert()->question('Title','Lorem Lorem Lorem');
            // alert()->html('<i>HTML</i> <u>example</u>'," You can use <b>bold text</b>, <a href='//github.com'>links</a> and other HTML tags ",'success');
        } else {
            alert()->error('Lưu Danh Mục: '.$request->name, 'Không Thành Công!');
        }
        return redirect()->route('categories');
    }
    public function destroy($id){
        $item = Category::findOrFail($id);
        $item->delete();
        if(!$item->delete()){
            alert()->success('Xóa Danh Mục: '.$item->name, 'Thành Công');
        } else {
            alert()->error('Xóa Danh Mục: '.$item->name, 'Không Thành Công!');
        }
        return redirect()->route('categories');
    }
}
