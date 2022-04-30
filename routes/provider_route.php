<?php

use App\Http\Controllers\provider\ProviderController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;



Route::get('/',[ProviderController::class , 'login'])->name('job_provider.login');
Route::get('register',[ProviderController::class , 'register'])->name('job_provider.register');
Route::post('providerRegistered',[ProviderController::class , 'providerRegistered'])->name('job_provider.providerRegistered');
// Route::post('user-login', [UserController::class, 'loginSubmit'])->name('user.login_submit');

Route::middleware(['job_provider_middleware'])->group(function () {
    
    route::get('dashboard',[ProviderController::class,'dashboard'])->name('job_provider.dashboard');
    // route::get('logout',[UserController::class,'userlogout'])->name('user.logout');
//     route::get('profile',[ProfileController::class,'profile'])->name('admin.profile');
});

?>