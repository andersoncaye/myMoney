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

Route::get('/usuario', 'UsersController@index');

Route::get('/categoria', 'CategoriesController@index');
Route::get('/categoria/novo', 'CategoriesController@formNew');
Route::post('/categoria/cadastro/store', 'CategoriesController@store');
Route::get('/categoria/{id}/cadastro', 'CategoriesController@formEdit');
Route::post('/categoria/cadastro/update/{id}', 'CategoriesController@update');
