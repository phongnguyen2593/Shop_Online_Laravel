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
    'namespace' => 'Backend',
    'prefix' => 'admin',
    'middleware' => 'auth', 
    'as' => 'backend.'
], function () {
    Route::get('/dashboard', 'DashboardController@index')->name('index');

    Route::group([
        'prefix' => 'product',
        'as' => 'product.'
    ], function () {
        Route::get('/', 'ProductController@index')->name('index');
        Route::get('/create', 'ProductController@create')->name('create');
        Route::post('/store', 'ProductController@store')->name('store');
    });
});

//Frontend
Route::group([
    'namespace' => 'Frontend',
    'as' => 'frontend.',
    'prefix' => ''
], function() {
    Route::get('/', 'HomeController@index')->name('index');
    Route::get('/category', 'HomeController@category')->name('category');
});