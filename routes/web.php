<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\HelloMiddleware;

Route::get('hello','HelloController@index')
->middleware('helo');