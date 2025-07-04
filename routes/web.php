<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\SingleController;
use App\Http\Middleware\CheckIfNameIsArafa;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     $data = ['1','2','3'];
//     // return view('page' , ['myData' => $data]);
//     return view('page' , compact('data'));
// });

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
// Route::resource('posts',PostController::class);

//Theme ROUTES

Route::controller(ThemeController::class)->name('theme.')->group(function(){
    Route::get('/about','about')->name('about');
    Route::get('/services','services')->name('services');
    Route::get('/contacts','contacts')->name('contacts');
    Route::post ('/contacts/store','store')->name('contacts.store');
});

