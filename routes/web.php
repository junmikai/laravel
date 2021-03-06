<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\HelloMiddleware;

Route::get('hello','HelloController@index');
Route::get('hello/show', 'HelloController@show');
Route::post('hello','HelloController@post');
Route::get('hello/add','HelloController@add');
Route::post('hello/add','HelloController@create');
Route::get('hello/edit','HelloController@edit');
Route::post('hello/edit','HelloController@update');
Route::get('hello/del','HelloController@del');
Route::post('hello/del','HelloController@remove');

Route::get('person','PersonController@index'); 

Route::get('person/find','PersonController@find'); 
Route::post('person/find','PersonController@search'); 

Route::get('person/add','PersonController@add'); 
Route::post('person/add','PersonController@create'); 

Route::get('person/edit','PersonController@edit'); 
Route::post('person/edit','PersonController@update');
