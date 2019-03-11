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

Route::get('/item', function() {
    return view('item');
});
Route::get('/shop', function() {
    return view('shop');
});