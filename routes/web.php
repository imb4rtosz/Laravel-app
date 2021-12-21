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

// Coffee routes
Route::get('/coffees', 'App\Http\Controllers\CoffeeController@index')->name('coffees.index')->middleware('auth');
Route::get('/coffees/create', 'App\Http\Controllers\CoffeeController@create')->name('coffees.create');
Route::post('/coffees', 'App\Http\Controllers\CoffeeController@store')->name('coffees.store');
Route::delete('/coffee/{id}', 'App\Http\Controllers\CoffeeController@destroy')->name('coffee.destroy')->middleware('auth');
Route::get('/coffees/{id}', 'App\Http\Controllers\CoffeeController@show')->name('coffees.show')->middleware('auth');


// Auth::routes(
//   [
//   'register' => false,
// ])
// ;
// Route::get('logout', [ 'uses' => 'Auth\AuthController@getLogout', 'as' => 'logout' ]);

// Route::get('/home', 'HomeController@index')->name('home');


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
