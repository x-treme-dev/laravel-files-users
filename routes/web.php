<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/page/', [TestController::class, 'index']);
Route::get('/page/{id}', [TestController::class, 'page']);
// форма 
Route::get('/form/', [FormController::class, 'index']);
/*Route::get('/form/', function(){
    return view('test.form');
});*/
Route::post('/register/', [RegisterController::class, 'store'])->name('register');