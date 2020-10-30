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

// Route::get('/', function () {
//     return view('employe.index');
// });


Route::get('/', 'App\Http\Controllers\EmployeController@index');
Route::post('/search', 'App\Http\Controllers\EmployeController@search')->name('employe.search');
Route::post('/store', 'App\Http\Controllers\EmployeController@store')->name('employe.store');
Route::view('/add-employer','employe.addemploye')->name('employer.add');

//Route::resource('/', 'App\Http\Controllers\EmployeController');
