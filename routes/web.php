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
Route::get('pizzaOrder', function () {
    return view('pizzaOrder');
});
Route::get('pizzaDetails','PizzaController@index')->middleware('auth');
Route::get('/pizzaDetails/{id}','PizzaController@show')->middleware('auth');
Route::post('/','PizzaController@store');
Route::delete('/pizzaDetails/{id}','PizzaController@destroy')->middleware('auth');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
