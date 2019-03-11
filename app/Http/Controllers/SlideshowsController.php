<?php

namespace App\Http\Controllers;

use App\Slideshow;
use Illuminate\Http\Request;

class SlideshowsController extends Controller
{
     //
     public function index(Request $request) {
        if (auth()->user()->id != 1) {
            return response()->json(['message'=> 'permission denied'], 403);
        }
        $slideshows = Slideshow::all();
        return view('admin/slideshows')->with(['slideshows' => $slideshows]);

    }

    public function delete($slideshow_id) {
        if (auth()->user()->id != 1) {
            return response()->json(['message'=> 'permission denied'], 403);
        }
        $slideshow = Slideshow::find($slideshow_id);
        if ($slideshow == null) return redirect('/admin/slideshows');
        $slideshow->delete();
        return redirect('/admin/slideshows');
    }

    public function edit($slideshow_id) {
        if (auth()->user()->id != 1) {
            // return response()->json(['message'=> 'permission denied'], 403);
            abort(403, 'permission denied');
        }
        $slideshow = Slideshow::find($slideshow_id);
        if ($slideshow == null) return abort('404');
        return view('admin/slideshow')->with(['slideshow' => $slideshow]);
    }

    public function update($slideshow_id, Request $request) {
        if (auth()->user()->id != 1) {
            // return response()->json(['message'=> 'permission denied'], 403);
            abort(403, 'permission denied');
        }
        $slideshow = Slideshow::find($slideshow_id);
        if ($slideshow == null) return abort('404');


        $slideshow->title = $request->title;
        $slideshow->description = $request->description;
        $slideshow->url = $request->url;

        if ($request->hasFile('image')) {
            if(\File::exists(storage_path('app/public/uploads/') . $slideshow->image)){
                \File::delete(storage_path('app/public/uploads/') . $slideshow->image);
            }
        }
        $image = $request->file('image');
        $image->store('public/uploads');
        $slideshow->image = $image->hashName();
        $slideshow->save();
        return redirect('/admin/slideshows');
    }

    public function create(Request $request) {
        if (auth()->user()->id != 1) {
            // return response()->json(['message'=> 'permission denied'], 403);
            abort(403, 'permission denied');
        }

        if ($request->isMethod('get')) {
            
            return view('/admin/slideshow')->with(['is_create' => true]);

        } else if ($request->isMethod('post')) {
            $slideshow =  new Slideshow();
            $slideshow->title = $request->title;
            $slideshow->description = $request->description;
            $slideshow->url = $request->url;
            $image = $request->file('image');
            $image->store('public/uploads');
            $slideshow->image = $image->hashName();
            $slideshow->save();
            return redirect('/admin/slideshows');
        }
    }
}
