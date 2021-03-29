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

Route::group(['middleware' => 'web'], function () {
    /*Route::get('/', function () {
        return view('welcome');
    });*/

    Route::get('/', 'HomeController@index');
    Auth::routes();
    Route::get('/home', 'HomeController@index')->name('home');
});

Route::get('/usuario', 'UsersController@index')->middleware('auth');
//Route::get('/usuario/novo', 'UsersController@formNew');

Route::get('/categoria', 'CategoriesController@index')->middleware('auth');
Route::get('/categoria/novo', 'CategoriesController@formNew')->middleware('auth');
Route::post('/categoria/cadastro/store', 'CategoriesController@store')->middleware('auth');
Route::get('/categoria/{id}/cadastro', 'CategoriesController@formEdit')->middleware('auth');
Route::post('/categoria/cadastro/update/{id}', 'CategoriesController@update')->middleware('auth');
Route::delete('/categoria/cadastro/delete/{id}', 'CategoriesController@destroy')->middleware('auth');
