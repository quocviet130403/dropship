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


Auth::routes();

Route::get('/{pages}','WebController@show')->name('web.show');
Route::get('san-pham/{category}','WebController@show');
Route::get('san-pham/chi-tiet/{id}', 'WebController@showDetail')->name('web.detail');
//Cart

Route::post('cart/add/{id}','CartController@addCart')->name('cart.add');
Route::post('cart/update','CartController@updateCart')->name('cart.update');
Route::post('cart/addCustomer','CartController@addCustomer')->name('cart.addCustomer');

// Ajax
Route::post('products/filter','AjaxController@filterProduct')->name('products.filter');

//Admin
Route::group(['middleware' => 'auth'], function () {
    //Users
    Route::group(['prefix' => 'admin'], function () {
        
        Route::get('/dasboard', function ()    {
            return view('admin.dasboard.index');
        });
        
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

