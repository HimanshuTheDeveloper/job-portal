<?php

use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;



Route::get('/',[UserController::class , 'login'])->name('user.login');
Route::get('register',[UserController::class , 'register'])->name('user.register');
Route::post('userRegistered',[UserController::class , 'userRegistered'])->name('user.userRegistered');
Route::post('user-login', [UserController::class, 'loginSubmit'])->name('user.login_submit');

Route::middleware(['user_middleware'])->group(function () {
    
    route::get('dashboard',[UserController::class,'dashboard'])->name('user.dashboard');
    route::get('logout',[UserController::class,'userlogout'])->name('user.logout');
//     route::get('profile',[ProfileController::class,'profile'])->name('admin.profile');
});

?>