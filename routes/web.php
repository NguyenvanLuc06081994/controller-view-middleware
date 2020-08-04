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

Route::prefix('/tasks')->group(function (){
    Route::get('/welcome','TaskController@welcome')->name('tasks.welcome');
    Route::get('/','TaskController@index')->name('tasks.index');
    Route::get('/add','TaskController@showFormAdd')->name('tasks.showFormAdd');
    Route::post('/','TaskController@add')->name('tasks.add');


});

Route::prefix('/customers')->group(function (){
    Route::get('/','CustomerController@index')->name('customers.index');
});

Route::get('/register','AuthController@showFormRegister')->name('auth.showFormRegister');
Route::post('/register','AuthController@register')->name('auth.register')->middleware('checkAge');
