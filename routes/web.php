<?php

use Illuminate\Support\Facades\Auth;
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



//Web
Route::get('/', function () {
    return view('home');
});
Route::get('/brand', function () {
    return view('brand');
});


Auth::routes();

//Admin
Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin', function ()    {
        return view('admin.dasboard.index');
    });
    
    //Users
    Route::group(['prefix' => 'admin'], function () {
        Route::get('/user',function(){
            return view('admin.users.index');
        });
    });
});
