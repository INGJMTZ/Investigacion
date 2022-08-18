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

Route::group(['prefix' => 'admin', 'as' => 'admin'], function(){
Route::get('/', 'AdminController@index');
Route::get('/usuarios','UsersController@index');
Route::get('/proyectos', function(){return view('proyectos');});
Route::get('/nosotros', function(){return view('nosotros');});
Route::get('/perfil', function(){return view('perfil');});
Route::get('/login', function(){return view('login');});
Route::get('/registro', function(){return view('registro');});

});
