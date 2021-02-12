<?php

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Whoops\Run;

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
Route::get('/article','\App\Http\Controllers\ArticleController@index')->name('article.index');
Route::get('/article/show/{id?}','\App\Http\Controllers\ArticleController@show')->name('article.show');
Route::get('/article/create/','\App\Http\Controllers\ArticleController@create')->name('article.create');
Route::post('/article','\App\Http\Controllers\ArticleController@store')->name('article.store');
Route::get('/article/edit/{id}','\App\Http\Controllers\ArticleController@edit')->name('article.edit');
Route::put('/article/update/{id}','\App\Http\Controllers\ArticleController@update')->name('article.update');
Route::delete('/article/delete/{id}','\App\Http\Controllers\ArticleController@destroy')->name('article.destroy');

// Route::resource('category', '\App\Http\Controllers\CategoryController');
// Route::get('profile','\App\Http\Controllers\ShowProfile');

// Route::get('test1', function () {
//     // Redirect::to('/article/create');
//     return redirect()->to('/article/create');
// });

// Route::get('redirect',function(){
//     return redirect()->route('article.show',['id'=>1]);
// });
// Route::get('redirectback', function () {
//     return redirect()->back();
// });

// Route::get('users/{id}', function ($id) {
    
// });
Route::get('admin', function () {
    echo "Your are admin";
    echo session('admin');
    echo session('isAdmin');
})->name('admin');