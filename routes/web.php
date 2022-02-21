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

// Include Admin Routes by Himanshu...
Route::prefix('admin')->group(base_path('routes/admin_route.php'));

Route::prefix('provider')->group(base_path('routes/provider_route.php'));

Route::prefix('user')->group(base_path('routes/user_route.php'));

Route::get('/', function () {
    return view('website.index');
})->name('home');
Route::get('/about', function () {
    return view('website.about');
})->name('about');
