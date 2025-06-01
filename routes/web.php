<?php

use App\Http\Controllers\TestControllers;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/arafa',[TestControllers::class,'arafa']);

