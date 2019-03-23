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

Route::middleware(['auth'])->group(function(){

//Roles
	Route::post('roles/store', 'RolesController@store')->name('roles.store')->middleware('permission:roles.create');

	Route::get('roles')->name('roles.index', 'RolesController@index')->middleware('permission:roles.index');

	Route::get('roles/store')->name('roles.create', 'RolesController@create')->middleware('permission:roles.create');

	Route::put('roles/{role}')->name('roles.update', 'RolesController@update')->middleware('permission:roles.edit');

	Route::get('roles/{role}')->name('roles.show', 'RolesController@show')->middleware('permission:roles.show');

	Route::delete('roles/{store}')->name('roles.destroy', 'RolesController@destroy')->middleware('permission:roles.destroy');

	Route::get('roles/{role}/edit')->name('roles.edit', 'RolesController@edit')->middleware('permission:roles.edit');

//Productos
	Route::post('products/store', 'ProductController@store')->name('products.store')->middleware('permission:products.create');

	Route::get('products')->name('products.index', 'ProductController@index')->middleware('permission:products.index');

	Route::get('products/store')->name('products.create', 'ProductController@create')->middleware('permission:products.create');

	Route::put('products/{role}')->name('products.update', 'ProductController@update')->middleware('permission:products.edit');

	Route::get('products/{role}')->name('products.show', 'ProductController@show')->middleware('permission:products.show');

	Route::delete('products/{store}')->name('products.destroy', 'ProductController@destroy')->middleware('permission:products.destroy');

	Route::get('products/{role}/edit')->name('products.edit', 'ProductController@edit')->middleware('permission:products.edit');

	//Usuarios
	Route::get('users')->name('users.index', 'UsersController@index')->middleware('permission:users.index');

	Route::put('users/{role}')->name('users.update', 'UsersController@update')->middleware('permission:users.edit');

	Route::get('users/{role}')->name('users.show', 'UsersController@show')->middleware('permission:users.show');

	Route::delete('users/{store}')->name('users.destroy', 'UsersController@destroy')->middleware('permission:users.destroy');

	Route::get('users/{role}/edit')->name('users.edit', 'UsersController@edit')->middleware('permission:users.edit');

});
