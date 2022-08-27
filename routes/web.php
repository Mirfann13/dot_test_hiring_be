<?php

use App\Http\Controllers\Provandcity;
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
    return 'Test Backend PHP DOT Hiring';
});

Route::prefix('search')->middleware('auth')->group(function() {
    Route::get('/provinces', [Provandcity::class, 'getProvince']);
    Route::get('/cities', [Provandcity::class, 'getCity']);
});
