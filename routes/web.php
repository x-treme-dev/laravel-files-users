<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\FormController;
 


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
Route::post('/form/', [FormController::class, 'store'])->name('form.store');