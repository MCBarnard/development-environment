<?php

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Cache;
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
    Cache::put('SECRET_REDIS_CACHE_WORKS_KEY', 'Ah, You have found the secret key, well done you!', Carbon::now()->addMinutes(40));
    dispatch(new \App\Jobs\DispatchWelcomeMailer());
    return view('welcome');
});
