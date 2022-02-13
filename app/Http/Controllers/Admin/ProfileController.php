<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Auth;

class ProfileController extends Controller
{
    //
    public function profile()
    { 
        $admin = Auth::guard('admin')->id();         
        $adminData = Admin::find($admin);
        return view('admin.profile.profile')->with(compact('adminData'));
    }
}
