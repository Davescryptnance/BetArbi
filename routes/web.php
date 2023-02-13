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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
Route::post('/welcome', [App\Http\Controllers\HomeController::class, 'save'])->name("/welcome");
Route::get('/welcome', [App\Http\Controllers\HomeController::class, 'save'])->name("/welcome");

Route::get('/contact', function () {
         return view('contacts');
    });

    Route::post('/contacts', [App\Http\Controllers\ContactController::class, 'save'])->name("/contacts");
    Route::get('/contacts', [App\Http\Controllers\ContactController::class, 'save'])->name("/contacts");
    