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
    Route::get('/admin/items', 'ItemsController@index');
    Route::get('/admin/items/edit/{item_id}', 'ItemsController@edit');
    Route::post('/admin/items/edit/{item_id}', 'ItemsController@update');
    Route::get('/admin/items/delete/{item_id}', 'ItemsController@delete');



    Route::get('/test', function () {
        return view('item');
    });
});


Route::group(['middleware' => 'auth'], function () {

    Route::get('/admin/test', function () {
        if (auth()->user()->id != 1) {
            return 'go kill your self mother fucker 🖕';
        }
        return view('item');
    });



    Route::get('/image/upload', function (\Illuminate\Http\Request $request) {
       return view('upload');
    });

    Route::post('/image/upload', function (\Illuminate\Http\Request $request) {
        $file = $request->file('image');
        return ['file' => $file->store('uploads'), 'name' => $file->hashName()];
    });

});




Auth::routes();

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');


Route::get('/home', 'HomeController@index')->name('home');
