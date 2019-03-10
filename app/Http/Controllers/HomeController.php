<?php

namespace App\Http\Controllers;

use App\Item;
use App\Slideshow;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $slideshows = Slideshow::all();
        $items = Item::inRandomOrder()->take(5)->get();
        $top_seals_items = Item::inRandomOrder()->take(5)->get();
        return view('home')->with(['slideshows' => $slideshows, 'items'=> $items]);
    }
}
