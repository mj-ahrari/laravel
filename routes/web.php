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

// Route::get('/', function () {
//     $name = 'jafar';
//     $age = 27;
//     return view('welcome',compact(['name', 'age']));
// });

// Route::get('/','\App\Http\Controllers\HomeController@index')->name('home.index');
Route::get('/articles','\App\Http\Controllers\ArticleController@index')->name('article.index');
Route::get('/article/show/{id?}','\App\Http\Controllers\ArticleController@show')->name('article.show');
Route::get('/article/create/','\App\Http\Controllers\ArticleController@create')->name('article.create');
Route::post('/article','\App\Http\Controllers\ArticleController@store')->name('article.store');
Route::get('/article/edit/{id}','\App\Http\Controllers\ArticleController@edit')->name('article.edit');
Route::put('/article/update/{id}','\App\Http\Controllers\ArticleController@update')->name('article.update');
Route::delete('/article/delete/{id}','\App\Http\Controllers\ArticleController@destroy')->name('article.destroy');

Route::resource('category', '\App\Http\Controllers\CategoryController');
