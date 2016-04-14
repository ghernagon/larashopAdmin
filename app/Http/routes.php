<?php

/*
  |--------------------------------------------------------------------------
  | Routes File
  |--------------------------------------------------------------------------
  |
  | Here is where you will register all of the routes in an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */

Route::get('/', function () {
    return view('welcome');
});

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | This route group applies the "web" middleware group to every route
  | it contains. The "web" middleware group is defined in your HTTP
  | kernel and includes session state, CSRF protection, and more.
  |
 */

Route::group(['middleware' => ['web'], 'prefix' => 'admin'], function () {
    //Dashboard Route
    Route::get('dashboard', function() {
        return view('admin.dashboard');
    });

    //EShop Data Entry Routes
    Route::resource('brands', 'EShopDataEntry\BrandsController');
    Route::resource('categories', 'EShopDataEntry\categoriesController');
    Route::resource('products', 'EShopDataEntry\ProductsController');

    //EShop Transactions Routes
    Route::resource('customers', 'EShopTransactions\CustomersController');
    Route::resource('orders', 'EShopTransactions\OrdersController');
    Route::resource('product-sales', 'EShopTransactions\ProductSalesController');

    //Frontend Data Entry Routes
    Route::resource('blog-posts', 'FrontendDataEntry\BlogPostsController');
    Route::resource('pages', 'FrontendDataEntry\PagesController');

    //System
    Route::resource('system-users', 'System\UsersController');
    
    Route::resource('database-backup', 'System\SystemController@dbbackup');
    Route::resource('csv-export', 'System\SystemController@csvexport');
    Route::resource('csv-import', 'System\SystemController@csvimport');
});
