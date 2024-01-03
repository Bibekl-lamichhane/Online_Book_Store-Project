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
    return view('welcome');
});
//I change this one
// Route::get('/', function () {
//     return view('welcome');
// });

Route::prefix('bookStore')->group( function(){

    Route::controller(App\Http\Controllers\BookStoreController::class)->group( function(){
        Route::get('/Homepage','index');

    });




});