<?php

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::group(['prefix' => 'user', 'as' => 'user.'], function () {
    Route::get('/', 'UserController@index')->name('index')->middleware('auth', 'role:1|2|3|4');
    Route::get('/create', 'UserController@create')->name('create')->middleware('auth', 'role:1|2|3|4');
    Route::post('/store', 'UserController@store')->name('store')->middleware('auth', 'role:1|2|3|4');
    Route::post('/edit', 'UserController@findAndChange')->name('findAndChange')->middleware('auth', 'role:1|2|3|4');
    Route::get('/edit/{id}', 'UserController@edit')->name('edit')->middleware('auth', 'role:1|2|3|4');
    Route::post('/update/{id}', 'UserController@update')->name('update')->middleware('auth', 'role:1|2|3|4');
    Route::get('/suspand/{id}', 'UserController@suspand')->name('suspand')->middleware('auth', 'role:1|2|3|4');
    Route::get('/delete/{id}', 'UserController@destroy')->name('delete')->middleware('auth', 'role:1|2|3|4');
});


require __DIR__ . '/auth.php';
