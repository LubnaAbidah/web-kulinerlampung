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
Route::redirect('/','login');

Route::middleware('auth')->group(function(){
    Route::get('/home', function () {
        return view('welcome');
    })->name('home');
    Route::get('/sub-district', \App\Http\Controllers\SubDistrictController::class)->name('subdistrict.index');
    Route::resource('/category', \App\Http\Controllers\CategoryController::class);
    Route::resource('/place', \App\Http\Controllers\PlaceController::class);
});
