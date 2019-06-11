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


Route::get('/', 'PagesController@main');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');


Route::get('/contact', 'PagesController@contact');
Route::get('/about', 'PagesController@about');
Route::get('/main', 'PagesController@main');


Route::group(['middleware' => ['web']], function(){
   /* Route::post('/works', 'WorksController@store');
    Route::get('/works', 'WorksController@index');
    Route::get('/works/create', 'WorksController@create');
    Route::get('/works/{id}', 'WorksController@show'); */
    Route::resource('works', 'WorksController');
    Route::get('/userShow', 'WorksController@userShow');
    Route::get('/videos/{id}/delete', 'WorksController@delete');
    Auth::routes();
});

