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

Route::get('/', function () {
    return view('welcome');
});

Route::get('event/{id}', 'EventController@index');

Route::get('/about', function (){
    return view('about');
});
Auth::routes();

//Route::get('/home', [
//    'middleware' => 'auth',
//    'uses'=> 'HomeController@index'
//]);

Route::get('/home','HomeController@index');
Route::get('manage-item', 'ItemAjaxController@manageItemAjax');
Route::resource('item-ajax', 'ItemAjaxController');
Route::get('/sample','HomeController@sample');
Route::get('createE','EventController@createE');
