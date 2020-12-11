<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;


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

Auth::routes();
Route::get('/test', 'Frontend\HomeController@test');


//================================ Backend ================================
Route::group([
    'namespace'     => 'Backend',
    'prefix'        => 'admin',
    'middleware'    => ['auth', 'auth.admin'],
    'as'            => 'backend.'
], function () {
    Route::get('/dashboard', 'DashboardController@index')->name('index');

    //Product Controller
    Route::group([
        'prefix'    => 'product',
        'as'        => 'product.'
    ], function () {
        Route::get('/', 'ProductController@index')->name('index');
        Route::get('/create', 'ProductController@create')->name('create');
        Route::post('/store', 'ProductController@store')->name('store');
        Route::get('/edit/{product}', 'ProductController@edit')->name('edit');
        Route::match(['put', 'patch'], 'update/{product}', 'ProductController@update')->name('update');
        Route::get('/show/{product}', 'ProductController@show')->name('show');
        Route::delete('/{product}', 'ProductController@destroy')->name('delete');
        Route::get('/trash', 'ProductController@trash')->name('trash');
        Route::post('/restore/{id}', 'ProductController@restoreProduct')->name('restore');
        Route::delete('/force-delete/{product}', 'ProductController@forceDeleteProduct')->name('forceDelete');
        Route::get('/data', 'ProductController@getData')->name('data');
        Route::get('/trash-data', 'ProductController@trashData')->name('trashData');
    });

    //Category Controller
    Route::group([
        'prefix'    => 'category',
        'as'        => 'category.'
    ], function () {
        Route::get('/', 'CategoryController@index')->name('index');
        Route::get('/create', 'CategoryController@create')->name('create');
        Route::post('/store', 'CategoryController@store')->name('store');
        Route::get('/{category}/edit', 'CategoryController@edit')->name('edit');
        Route::match(['put', 'patch'], '/{category}', 'CategoryController@update')->name('update');
        Route::delete('/{category}', 'CategoryController@destroy')->name('delete');
        Route::get('/show/{category}', 'CategoryController@show')->name('show');
        Route::get('/data', 'CategoryController@getData')->name('data');
    });

    //Brand Controller
    Route::group([
        'prefix'    => 'brand',
        'as'        => 'brand.'
    ], function () {
        Route::get('/', 'BrandController@index')->name('index');
        Route::get('/create', 'BrandController@create')->name('create');
        Route::post('/store', 'BrandController@store')->name('store');
        Route::get('/edit/{brand}', 'BrandController@edit')->name('edit');
        Route::match(['put', 'patch'], 'update/{brand}', 'BrandController@update')->name('update');
        Route::delete('/{brand}', 'BrandController@destroy')->name('delete');
        Route::get('/show/{brand}', 'BrandController@show')->name('show');
        Route::get('/list', 'BrandController@getData')->name('data');
    });

    //User Controller
    Route::group([
        'prefix'    => 'user',
        'as'        => 'user.'
    ], function () {
        Route::get('/', 'UserController@index')->name('index');
        Route::get('/create', 'UserController@create')->name('create');
        Route::post('/store', 'UserController@store')->name('store');
        Route::get('/edit/{user}', 'UserController@edit')->name('edit');
        Route::put( '/update/{user}', 'UserController@update')->name('update');
        Route::match(['put', 'patch'], '/{user}', 'UserController@lock')->name('lock');
        Route::delete('/{user}', 'UserController@destroy')->name('delete');
        Route::get('/show/{user}', 'UserController@show')->name('show');
        Route::get('/list', 'UserController@getData')->name('data');
    });

    //Order
    Route::group([
        'prefix'    => 'order',
        'as'        => 'order.'
    ], function () {
        Route::get('/', 'OrderController@index')->name('index');
        Route::get('/edit/{order}', 'OrderController@edit')->name('edit');
        Route::match(['put', 'patch'], '/{order}', 'OrderController@update')->name('update');
        Route::delete('/{order}', 'OrderController@destroy')->name('delete');
        Route::get('/show/{order}', 'OrderController@show')->name('show');
        Route::get('/data', 'OrderController@getData')->name('data');
    });
});


//================================ Frontend ================================
Route::group([
    'namespace' => 'Frontend',
    'as'        => 'frontend.',
    'prefix'    => ''
], function () {
    Route::get('/', 'HomeController@index')->name('index');
    Route::post('/tim-kiem', 'HomeController@search')->name('search');
    Route::post('/tra-cuu', 'HomeController@tracking')->name('tracking');
    Route::get('/danh-muc', 'HomeController@category')->name('category');
    Route::get('/lien-he', 'HomeController@contact')->name('contact');
    Route::get('/shipping', 'HomeController@shipping')->name('shipping');

    //cart
    Route::group([
        'prefix'        => 'gio-hang',
        'as'            => 'cart.',
    ], function () {
        Route::get('', 'CartController@index' )->name('index');
        Route::get('/add/{id}', 'CartController@add')->name('add');
        Route::get('/remove/{id}', 'CartController@remove')->name('remove');
        Route::post('/update', 'CartController@update')->name('update');
        Route::get('/thanh-toan', 'CheckoutController@index')->name('check-out');
    });
    
    Route::post('/store', 'CheckoutController@store')->name('order.store');

    //product
    Route::group([
        'prefix'        => 'san-pham',
        'as'            => 'product.',
    ], function () {
        Route::get('', 'ProductController@index' )->name('index');
        Route::get('/{slug}', 'ProductController@detail' )->name('detail');
    });

    //User
    Route::group([
        'prefix'        => 'tai-khoan',
        'middleware'    => 'auth',
        'as'            => 'user.',
    ], function () {
        Route::get('', 'UserController@index' )->name('index');
        Route::match(['put', 'patch'], 'update', 'UserController@update')->name('update');
        Route::get('/wishlist', 'UserController@wishlist')->name('wishlist');
        Route::get('/mat-khau', 'UserController@changePasswordForm')->name('password');
        Route::post('/change-password', 'UserController@changePassword')->name('change-password');
    });
});