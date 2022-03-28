<?php

use App\Http\Controllers\CategoryController;
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
    return view('web.index');
});
Route::get('/list', function () {
    return view('web.list');
});
Route::get('/contact', function () {
    return view('web.contact');
});
Route::get('/about', function () {
    return view('web.about');
});
Route::get('/cart', function () {
    return view('web.cart.cart');
});
Route::get('/checkout', function () {
    return view('web.cart.checkout');
});
Route::get('/complete', function () {
    return view('web.cart.complete');
});
Route::get('/detail', function () {
    return view('web.detail');
});

Auth::routes();


//Admin
Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin', function ()    {
        return view('admin.dasboard.index');
    });
    
    //Users
    Route::group(['prefix' => 'admin'], function () {

        //user
        Route::get('/user',function(){
            return view('admin.users.index');
        })->name('admin.user.index');

        //pages

        Route::resource('page','PageController');

        //categories
        Route::resource('category', 'CategoryController');

        //products
        Route::resource('product', 'ProductController');
        Route::get('/delete-image/{id}','ProductController@deleteImage')->name('product.image.delete');

        //customers

        Route::resource('customer','CustomerController');
        Route::get('delete-product-customer/{productId}/{customerId}','CustomerController@deleteProductCustomer')->name('product.customer.delete');

    });
});

Auth::routes();

Route::group(['prefix' => 'laravel-filemanager'], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

