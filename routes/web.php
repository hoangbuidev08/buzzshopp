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
Route::get('/index', [
    'as'=>'trang-chu',
    'uses'=>'PageController@getIndex'
]);
Route::get('/categories',[
    'as'=>'loai-san-pham',
    'uses'=>'PageController@getCategory'
]);
Route::get('/about',[
    'as'=>'gioi-thieu',
    'uses'=>'PageController@getAbout'
]);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
