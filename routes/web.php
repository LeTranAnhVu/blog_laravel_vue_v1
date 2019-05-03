<?php

use Illuminate\Http\Request;
use Illuminate\Http\Response;
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


Route::group(['prefix'=>'/app'],function (){
    Route::get('/{any?}',function($any = ''){
        return view('app.index');
    })->where('any', '.*');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
