<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    //
    public function index(Request $request) {
        if (auth()->user()->id != 1) {
            return response()->json(['message'=> 'permission denied'], 403);
        }
        $items = Item::all();
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
            return response()->json(['message'=> 'permission denied'], 403);
        }
        $item = Item::find($item_id);
        if ($item == null) return view('404');


    }
}
