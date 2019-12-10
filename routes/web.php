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



Route::get('/styleguide', function () {
    return view('styleguide');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');


Route::get('restaurants', function(){
    return view('restaurant/search');
})->name('restaurants.search');

Route::get('restaurants/list', function(){
    return view('restaurant/list');
})->name('restaurants.list');

Route::get('restaurants/sample', function(){
    return view('restaurant/single');
});

Route::resource('restaurant', 'RestaurantController');
Route::resource('order', 'OrderController');
Route::resource('cart', 'CartController');
Route::resource('cartElement', 'CartElementController');

Route::resource('dish', 'DishController');

// Czy mi to jest potrzebne? xD
// Route::get('carts', function(){   return view('cart/search');})->name('carts.search');

// Route::get('carts/list', function(){return view('cart/list');})->name('carts.list');

Route::get('/cart/add/{cart}', 'CartController@add')->name('cart.add');
Route::get('/cart/create/', 'CartController@create')->name('cart.create');
Route::get('/cart/remove/{cart}', 'CartController@remove')->name('cart.remove');

//Route::get('/cartElement/add/{cartElement}', 'CartElement\CartElementController@addCartElement')->name('cartElement.add');
Route::get('/cartElement/remove/{cartElement}', 'CartElementController@remove')->name('cartElement.remove');

Route::get('/cartElement/create/{dish}', 'CartElementController@create')->name('cartElement.create');
Route::get('/cartElement/addAmount/{cartElement}', 'CartElementController@addAmount')->name('cartElement.addAmount');
Route::get('/cartElement/removeAmount/{cartElement}', 'CartElementController@removeAmount')->name('cartElement.removeAmount');


Route::get('/order/realizeOrder/{cart}', 'OrderController@realizeOrder')->name('order.realizeOrder');

Route::get('/admin/users', 'Admin\UsersController@list')->name('users.list');
Route::get('/admin/users/add', 'Admin\UsersController@addUser')->name('users.add');
Route::post('/admin/users/add', 'Admin\UsersController@addUserPost')->name('users.add_post');
Route::get('/admin/users/addrole/{user_id}/{role_slug}', 'Admin\UsersController@attachRole')->name('users.role.add');
Route::get('/admin/users/removerole/{user_id}/{role_slug}', 'Admin\UsersController@revoceRole')->name('users.role.remove');
