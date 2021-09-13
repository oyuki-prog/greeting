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

Route::get('/', function () {
    return '<h1>Hello from Root!</h1>';
});

Route::get('/comments/random', [App\Http\Controllers\GreetingController::class, 'random']);

Route::get('/comments/{time}', [App\Http\Controllers\GreetingController::class, 'greeting']);

Route::get('/comments/freeword/{word}', [App\Http\Controllers\FreewordController::class, 'word']);

