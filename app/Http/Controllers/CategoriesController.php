<?php

namespace App\Http\Controllers;

use App\Item;
use App\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
     //
     public function index(Request $request) {
        if (auth()->user()->id != 1) {
            return response()->json(['message'=> 'permission denied'], 403);
        }
        $categories = Category::all();
        return view('admin/categories')->with(['categories' => $categories]);

    }

    public function delete($category_id) {
        if (auth()->user()->id != 1) {
            return response()->json(['message'=> 'permission denied'], 403);
        }
        $category = Category::find($category_id);
        if ($category == null) return redirect('/admin/categories');

        $items = Item::where('category_id', $category->id)->get();
        foreach($items as $item) {
            if(\File::exists(storage_path('app/public/uploads/') . $item->image1)){
                \File::delete(storage_path('app/public/uploads/') . $item->image1);
            }
            if(\File::exists(storage_path('app/public/uploads/') . $item->image2)){
                \File::delete(storage_path('app/public/uploads/') . $item->image2);
            }
            if(\File::exists(storage_path('app/public/uploads/') . $item->image3)){
                \File::delete(storage_path('app/public/uploads/') . $item->image3);
            }
        }
        Item::where('category_id', $category->id)->delete();


        $category->delete();
        return redirect('/admin/categories');
    }

    public function edit($category_id) {
        if (auth()->user()->id != 1) {
            // return response()->json(['message'=> 'permission denied'], 403);
            abort(403, 'permission denied');
        }
        $category = Category::find($category_id);
        if ($category == null) return abort('404');
        return view('admin/category')->with(['category' => $category]);
    }

    public function update($category_id, Request $request) {
        if (auth()->user()->id != 1) {
            // return response()->json(['message'=> 'permission denied'], 403);
            abort(403, 'permission denied');
        }
        $category = Category::find($category_id);
        if ($category == null) return abort('404');
        $category->name = $request->name;
        $category->save();
        return redirect('/admin/categories');
    }
    
    public function create(Request $request) {
        if (auth()->user()->id != 1) {
            // return response()->json(['message'=> 'permission denied'], 403);
            abort(403, 'permission denied');
        }

        if ($request->isMethod('get')) {
            return view('/admin/category')->with(['is_create' => true]);

        } else if ($request->isMethod('post')) {
            $category =  new Category();
            $category->name = $request->name;
            $category->save();
            return redirect('/admin/categories');
        }
    }
    
}
