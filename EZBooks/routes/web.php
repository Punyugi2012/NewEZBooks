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

Route::get('/', function () {
    return "working";
});
Route::get('/admin/login', 'AdminController@onLogin');
Route::post('/admin/login', 'AdminController@checkExistence');
Route::group(['middleware' => ['admin'], 'prefix'=> 'admin'], function() {
    Route::get('dashboard', function() {
        return 'Admin Working';
    });
});
