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

Route::namespace('Site')->group(function (){
    Route::get('/', 'LoginController');

    Route::get('categorias', 'CategoryController@index')->name('category');
    Route::get('categorias/cadastro', 'CategoryController@store')->name('category.store');
    Route::post('categorias/cadastro', 'CategoryController@form')->name('category.form');
    Route::get('categorias/cadastro/{id}', function ($id){
        return action('CategoryController@edit');
    })->name('category.edit');

    Route::post('/', 'LoginController@authenticate')->name('login.auth');
});
