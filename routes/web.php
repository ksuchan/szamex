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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('restaurant', 'RestaurantController');
Route::resource('order', 'OrderController');
Route::resource('cart', 'CartController');

Route::get('/admin/users', 'Admin\UsersController@list')->name('users.list');
Route::get('/admin/users/add', 'Admin\UsersController@addUser')->name('users.add');
Route::post('/admin/users/add', 'Admin\UsersController@addUserPost')->name('users.add_post');
Route::get('/admin/users/addrole/{user_id}/{role_slug}', 'Admin\UsersController@attachRole')->name('users.role.add');
Route::get('/admin/users/removerole/{user_id}/{role_slug}', 'Admin\UsersController@revoceRole')->name('users.role.remove');
