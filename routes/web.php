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

Route::get('/',[\App\Http\Controllers\SiteController::class,'ShowHome']);

Route::get('/about',[\App\Http\Controllers\SiteController::class,'ShowAbout']);

Route::get('/portfolio',[\App\Http\Controllers\SiteController::class,'ShowPortfolio']);

Route::get('/service',[\App\Http\Controllers\SiteController::class,'ShowService']);
