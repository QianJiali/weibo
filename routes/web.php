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
    return view('static_pages/home');
});
Route::get('/help', function () {
    return view('static_pages/help');
})->name('help');
Route::get('/about', function () {
    return view('static_pages/about');
})->name('about');

/* sign up page*/
Route::get('/signup', function() {
    return view('users/signup');
})->name('signup');

Route::resource('users', 'UsersController');

/*login & logout*/
Route::get('login', 'SessionsController@create')->name('login');
Route::post('login', 'SessionsController@store')->name('login');
Route::delete('logout', 'SessionsController@destroy')->name('logout');
