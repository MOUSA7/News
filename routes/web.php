<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

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
View::share('news',App\News::latest()->take(5)->get());
View::share('new',App\News::latest()->first());
View::share('newsl',App\News::skip(2)->take(6)->get());


//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@view')->name('view');

 //News Route
Route::get('admin/news', 'admin\NewsController@index')->name('news');
Route::get('admin/news/create', 'admin\NewsController@create')->name('news.create');
Route::post('admin/news/create', 'admin\NewsController@store')->name('news.store');
Route::get('admin/news/edit/{id}', 'admin\NewsController@edit');
Route::post('admin/news/edit/{id}', 'admin\NewsController@update')->name('news.update');
Route::get('admin/news/delete/{id}', 'admin\NewsController@destroy');


Route::get('admin/users', 'admin\UsersController@index')->name('users');
Route::get('admin/users/create', 'admin\UsersController@create')->name('users.create');
Route::post('admin/users/create', 'admin\UsersController@store')->name('users.store');
Route::get('admin/users/edit/{id}', 'admin\UsersController@edit');
Route::post('admin/users/edit/{id}', 'admin\UsersController@update')->name('users.update');
Route::get('admin/users/delete/{id}', 'admin\UsersController@destroy');


Route::get('admin/articles', 'admin\ArticlesController@index')->name('articles');
Route::get('admin/articles/create', 'admin\ArticlesController@create')->name('articles.create');
Route::post('admin/articles/create', 'admin\ArticlesController@store')->name('articles.store');
Route::get('admin/articles/edit/{id}', 'admin\ArticlesController@edit');
Route::post('admin/articles/edit/{id}', 'admin\ArticlesController@update')->name('articles.update');
Route::get('admin/articles/delete/{id}', 'admin\ArticlesController@destroy');


Route::get('admin/section', 'admin\SectionController@index')->name('section');
Route::get('admin/section/create', 'admin\SectionController@create')->name('section.create');
Route::post('admin/section/create', 'admin\SectionController@store')->name('section.store');
Route::get('admin/section/edit/{id}', 'admin\SectionController@edit');
Route::post('admin/section/edit/{id}', 'admin\SectionController@update')->name('section.update');
Route::get('admin/section/delete/{id}', 'admin\SectionController@destroy');

Route::post('admin/media', 'admin\mediaController@createImage')->name('dropzone.store');
Route::get('admin/media', 'admin\mediaController@dropzone')->name('media');
