<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('todos', 'TodosController@index');
Route::get('todos/{todo}', 'TodosController@show');
Route::get('todos/edit/{todo}', 'TodosController@edit');
Route::get('new-todo', 'TodosController@create');
Route::post('newstore-todo', 'TodosController@newstore');
Route::post('store-todo/{todo}', 'TodosController@store');
Route::get('todos/{todo}/delete', 'TodosController@destroy');

// Route::get('/admin', 'AdmController@dashboard')->name('admin');
