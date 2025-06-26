<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\SingleController;
use App\Http\Middleware\CheckIfNameIsArafa;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

// Route::get('/arafa',[TestController::class,'arafa']);
// //requred parmaeter
// Route::get('printName/{name}',[TestController::class,'printName']);

// //optinal parametr
// Route::get('testprintname/{name?}',[TestController::class,'testprintname'])->name('print direct test');

// Route::redirect('/here','https://www.youtube.com/watch?v=Pwatx1n1Ws0');

// //Route group and ->name alson ->prefix
// Route::controller(TestController::class)->name('test.')->group(function () {

    // Route::get('/arafa','arafa');
    //requred parmaeter
    // Route::get('printName/{name}','printName');

//     //optinal parametr
//     Route::get('testprintname/{name?}','testprintname')->name('print direct test');

// });

//created using php artisan make:conteroller
// Route::get('/hello', [UserController::class,'Index']);
//created using php artisan make:controller --invokable(single action controller)
// Route::get('/hello',SingleController::class)->middleware(CheckIfNameIsArafa::class);
//exept and only functions
Route::resource('posts',PostController::class);