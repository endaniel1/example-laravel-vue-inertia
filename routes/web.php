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

Route::get('/', "WelcomeController");

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/articles', 'ArticlesController@index')->name("articles.index");
/**/
Route::get('/articles/create', 'ArticlesController@create')->name("articles.create");

Route::post('/articles/store', 'ArticlesController@store')->name("articles.store");

Route::delete('/articles/{article}', 'ArticlesController@destroy')->name("articles.destroy");

//Route::resource("articles", "ArticlesController");