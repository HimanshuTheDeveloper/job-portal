<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ProfileController;
use Illuminate\Support\Facades\Route;



route::get('/',[AdminController::class , 'login'])->name('admin.login');
Route::post('admin-login', [AdminController::class, 'loginSubmit'])->name('admin.login_submit');
Route::middleware(['admin_middleware'])->group(function () {
    route::get('dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');
    route::get('logout',[AdminController::class,'logout'])->name('admin.logout');
    route::get('profile',[ProfileController::class,'profile'])->name('admin.profile');
    
    
    // Add Area Route
    route::get('area',[AdminController::class,'index'])->name('admin.area');


    // Add Category Route
});

?>