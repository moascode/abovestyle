<?php

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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/**Authentication routes*/
Auth::routes();

/**Authenticated routes */
Route::middleware('auth')->group(function() {
    Route::get('/dashboard', 'OrdersController@index');

    Route::get('/order', 'OrdersController@add');
    Route::post('/order', 'OrdersController@create');

    Route::get('/order/{order}', 'OrdersController@edit');
    Route::post('/order/{order}', 'OrdersController@update');
});

/**Non-authenticated routes */
Route::get('/', 'HomeController@index')->name('home');
Route::get('/demo', 'DemoController@index')->name('demo');
Route::post('/demo/end', 'DemoController@end');

