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
Route::get('/', function () {
    return view('welcome');
});

Route::namespace('Admin')->group(function () {
    Route::prefix('admin')->group(function () {
        Auth::routes();
        Route::middleware(['auth'])->group(function () {
            Route::get('/', 'HomeController@index')->name('home');
            Route::get('/user', 'UserController@userList')->name('userList');
        });
    });
});

Route::namespace('Index')->group(function () {

});
