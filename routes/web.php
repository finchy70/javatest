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

Route::get('tools/index', ['uses' => 'ToolController@index', 'as' => 'tools.index']);
Route::post('tools/create', ['uses' => 'ToolController@create', 'as' => 'tools.create']);
