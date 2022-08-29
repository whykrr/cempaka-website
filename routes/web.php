<?php

use App\Http\Controllers\About;
use App\Http\Controllers\Blogarticle;
use App\Http\Controllers\Landingpage;
use App\Http\Controllers\Program;
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

Route::get('/', [Landingpage::class, 'index']);
Route::get('/blog-article/{slug}', [Blogarticle::class, 'detail']);
Route::get('/program/{slug}', [Program::class, 'detail']);
Route::get('/tentang', [About::class, 'index']);
