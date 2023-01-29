<?php

use App\Http\Controllers\GitPortfolioController;
use App\Http\Controllers\RyMController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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

Route::get('/', [RyMController::class ,'index'])->name('home');

Route::get('/portfolio', [GitPortfolioController::class,'index'])->name('portfolio');

// Route::view("","")->name();
