<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Http\Request;


Route::get('/', 'HomeController@index');
Route::group(['middleware' => 'auth'], function () {
    // manage items
    Route::get('/admin/items', 'ItemsController@index');
    Route::get('/admin/items/create', 'ItemsController@create');
    Route::post('/admin/items/create', 'ItemsController@create');
    Route::get('/admin/items/edit/{item_id}', 'ItemsController@edit');
    Route::post('/admin/items/edit/{item_id}', 'ItemsController@update');
    Route::get('/admin/items/delete/{item_id}', 'ItemsController@delete');
    
    // manage categories
    Route::get('/admin/categories', 'CategoriesController@index');
    Route::get('/admin/categories/create', 'CategoriesController@create');
    Route::post('/admin/categories/create', 'CategoriesController@create');
    Route::get('/admin/categories/edit/{category_id}', 'CategoriesController@edit');
    Route::post('/admin/categories/edit/{category_id}', 'CategoriesController@update');
    Route::get('/admin/categories/delete/{category_id}', 'CategoriesController@delete');
    
    // manage slides
    Route::get('/admin/slideshows', 'SlideshowsController@index');
    Route::get('/admin/slideshows/create', 'SlideshowsController@create');
    Route::post('/admin/slideshows/create', 'SlideshowsController@create');
    Route::get('/admin/slideshows/edit/{slideshow_id}', 'SlideshowsController@edit');
    Route::post('/admin/slideshows/edit/{slideshow_id}', 'SlideshowsController@update');
    Route::get('/admin/slideshows/delete/{slideshow_id}', 'SlideshowsController@delete');

    // logout get route
    Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

});

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/item/{item_id}', function(Request $request) {
    $item = App\Item::find($request->item_id);
    if ($item == null) abort(404);
    return view('item')->with(['item' => $item]);
});
Route::get('/shop', function(Request $request) {
    if ($request->has('search')) {
        $search = $request->search;
        $items = App\Item::where('name', 'like', '%' . $request->search . '%')->get(); // to do make it use pagination
    } else {
        $search = '';
        $items = App\Item::all(); // to do make it use pagination
    }
    $categories = App\Category::get();
    return view('shop')->with(['items' => $items, 'categories' => $categories, 'search' => $search]);
});

Route::get('/shop/{category_id}', function(Request $request) {
    if ($request->has('search')) {
        $search = $request->search;
        $items = App\Item::where('category_id', $request->category_id)->where('name', 'like', '%' . $request->search . '%')->get(); // to do make it use pagination
    } else {
        $search = '';
        $items = App\Item::where('category_id', $request->category_id)->get(); // to do make it use pagination
    }
    $categories = App\Category::get();
    
    return view('shop')->with(['items' => $items, 'categories' => $categories, 'selected_category' => $request->category_id, 'search' => $search]);
});

Route::get('/about', function() {
    return view('about');
});

Route::get('/contact', function() {
    return view('contact');
});
