<?php

namespace App\Http\Controllers;

use App\Item;
use App\Category;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    //
    public function index(Request $request) {
        if (auth()->user()->id != 1) {
            return response()->json(['message'=> 'permission denied'], 403);
        }
        $items = Item::with(['categoryDetails'])->get();
        return view('admin/items')->with(['items' => $items]);

    }

    public function delete($item_id) {
        if (auth()->user()->id != 1) {
            return response()->json(['message'=> 'permission denied'], 403);
        }
        $item = Item::find($item_id);
        if ($item == null) return redirect('/admin/items');
        $item->delete();
        return redirect('/admin/items');
    }

    public function edit($item_id) {
        if (auth()->user()->id != 1) {
            // return response()->json(['message'=> 'permission denied'], 403);
            abort(403, 'permission denied');
        }
        $item = Item::find($item_id);
        if ($item == null) return abort('404');
        $categories = Category::get();
        return view('admin/item')->with(['item' => $item, 'categories' => $categories]);
    }

    public function update($item_id, Request $request) {
        if (auth()->user()->id != 1) {
            // return response()->json(['message'=> 'permission denied'], 403);
            abort(403, 'permission denied');
        }
        $item = Item::find($item_id);
        if ($item == null) return abort('404');

        $item->name = $request->name;
            $item->category_id = $request->category;
            $item->price = $request->price;
            $item->quantity = $request->quantity;
            $item->description = $request->description;
            if ($request->hasFile('image1')) {
                if(\File::exists(storage_path('app/public/uploads/') . $item->image1)){
                    \File::delete(storage_path('app/public/uploads/') . $item->image1);
                }
                $image1 = $request->file('image1');
                $image1->store('public/uploads');
                $item->image1 = $image1->hashName();
            }

            if ($request->hasFile('image2')) {
                if(\File::exists(storage_path('app/public/uploads/') . $item->image2)){
                    \File::delete(storage_path('app/public/uploads/') . $item->image2);
                }
                $image2 = $request->file('image2');
                $image2->store('public/uploads');
                $item->image2 = $image2->hashName();
            }

            if ($request->hasFile('image3')) {
                if(\File::exists(storage_path('app/public/uploads/') . $item->image3)){
                    \File::delete(storage_path('app/public/uploads/') . $item->image3);
                }
                $image3 = $request->file('image3');
                $image3->store('public/uploads');
                $item->image3 = $image3->hashName();
            }
            $item->save();
            return redirect('/admin/items');
    }

    public function create(Request $request) {
        if (auth()->user()->id != 1) {
            // return response()->json(['message'=> 'permission denied'], 403);
            abort(403, 'permission denied');
        }

        if ($request->isMethod('get')) {
            
            $categories = Category::get();
            return view('/admin/item')->with(['is_create' => true, 'categories' => $categories]);

        } else if ($request->isMethod('post')) {
            $item =  new Item();
            $item->name = $request->name;
            $item->category_id = $request->category;
            $item->price = $request->price;
            $item->description = $request->description;
            if ($request->hasFile('image1')) {
                // $file->hashName()
                $image1 = $request->file('image1');
                $image1->store('public/uploads');
                $item->image1 = $image1->hashName();
            }
            if ($request->hasFile('image2')) {
                $image2 = $request->file('image2');
                $image2->store('public/uploads');
                $item->image2 = $image2->hashName();
            }
            if ($request->hasFile('image3')) {
                $image3 = $request->file('image3');
                $image3->store('public/uploads');
                $item->image3 = $image3->hashName();
            }
            $item->save();
            return redirect('/admin/items');
        }
    }
}
