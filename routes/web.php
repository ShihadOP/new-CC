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
//     return view('back');
// });

Route::get('/uae', function () {
    return view('uae');
});
Route::get('/oman', function () {
    return view('oman');
});
Route::get('/bahrain', function () {
    return view('bahrain');
});
Route::POST('/save','App\Http\Controllers\PizzaController@save');
Route::get('/', 'App\Http\Controllers\PizzaController@back')->name('home');
Route::get('/visarates', 'App\Http\Controllers\PizzaController@visarates')->name('visarates'); //CUSTOMER visarates.blade.php
Route::get('/back', 'App\Http\Controllers\PizzaController@back')->name('back'); //BACKEND visarates.blade.php
Route::get('/margins', 'App\Http\Controllers\PizzaController@margin')->name('margin'); //margin margin.blade.php
// Route::POST('/newuser', 'App\Http\Controllers\PizzaController@newuser')->name('newuser'); //NewUser Newser.blade.php
Route::get('/newuser','App\Http\Controllers\PizzaController@newuser');

Route::post('/savemargins','App\Http\Controllers\PizzaController@savemargins'); //savemargins 
