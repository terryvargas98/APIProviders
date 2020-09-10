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





Route::view('/','Index')->name('Index');
Route::view('/Home','Home')->name('Home');
 Route::view('/About','About')->name('About'); 
Route::view('/Contact','Contact')->name('Contact');

//Project//
Route::view('/CreateProject','CreateProject')->name('GetCreateProject')->middleware('auth');
Route::post('/CreateProject','ProjectController@Create')->name('PostCreateProject');
Route::get('/ShowProject','ProjectController@show')->name('ShowProject');
Route::get('/ShowElements/{Project}','ProjectController@ShowElements')->name('ShowElements');
Route::view('/Elements','Elements');    
Route::get('/EditProject/{Project}','ProjectController@EditProject')->name('EditProject');
Route::Patch('/UpdateProject/{Project}','ProjectController@UpdateProject')->name('UpdateProject');
Route::DELETE('/DeleteProject/{Project}','ProjectController@DeleteProject')->name('DeleteProject')->middleware('auth');

Route::view('/ConsumiendoApi','FormApi')->name('ApiGet');
Route::post('/CalculandoEuros','ApiController@Calcular')->name('ApiPost');

Route::get('/api','ProjectController@api');

    






 

Auth::routes();


