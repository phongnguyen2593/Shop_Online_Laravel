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

// Backend
Route::group([
    'namespace'     => 'Backend',
    'prefix'        => 'admin',
    'middleware'    => ['auth', 'auth.admin'],
    'as'            => 'backend.'
], function () {
    Route::get('/dashboard', 'DashboardController@index')->name('index');

    Route::group([
        'prefix'    => 'product',
        'as'        => 'product.'
    ], function () {
        Route::get('/', 'ProductController@index')->name('index');
        Route::get('/create', 'ProductController@create')->name('create');
        Route::post('/store', 'ProductController@store')->name('store');
        Route::get('/edit/{product}', 'ProductController@edit')->name('edit');
        Route::match(['put', 'patch'], '/{product}', 'ProductController@update')->name('update');
        Route::get('/show/{product}', 'ProductController@show')->name('show');
        Route::delete('/{product}', 'ProductController@destroy')->name('delete');
    });

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
    });

    Route::group([
        'prefix'    => 'user',
        'as'        => 'user.'
    ], function () {
        Route::get('/', 'UserController@index')->name('index');
        Route::get('/create', 'UserController@create')->name('create');
        Route::post('/store', 'UserController@store')->name('store');
        Route::get('/edit/{user}', 'UserController@edit')->name('edit');
        Route::match(['put', 'patch'], '/{user}', 'UserController@update')->name('update');
        Route::delete('/{user}', 'UserController@destroy')->name('delete');
        Route::get('/show/{user}', 'UserController@show')->name('show');
    });
});

//Frontend
Route::group([
    'namespace' => 'Frontend',
    'as'        => 'frontend.',
    'prefix'    => ''
], function () {
    Route::get('/', 'HomeController@index')->name('index');
    Route::get('/category', 'HomeController@category')->name('category');
    Route::get('/tracking', 'HomeController@tracking')->name('tracking');
    Route::get('/contact', 'HomeController@contact')->name('contact');
    Route::get('/shipping', 'HomeController@shipping')->name('shipping');
    Route::get('/test', 'HomeController@test')->name('test');

    Route::group([
        'prefix'        => 'user',
        'middleware'    => 'auth',
        'as'            => 'user.',
    ], function () {
        Route::get('/info/{user}', 'UserController@info' )->name('info');
        Route::get('/wishlist/{user}', 'UserController@wishlist')->name('wishlist');
    });
});