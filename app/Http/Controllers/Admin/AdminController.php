<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use Session;

class AdminController extends Controller
{
    //

    public function dashboard()
    {
        return view('admin.dashboard');
    }
    
    public function login()
    {
        return view('admin.auth.login');
    }

    public function loginSubmit(Request $request)
    {
        
        $rules = [
            'email'   => 'required',
            'password' => 'required|min:6'
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json(array('result' => false, 'msg' => $validator->errors()->first()));
        }
        else{
            
            if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
                    return json_encode(['status' => true, 'msg' => "Success, Welcome Back!", 'location' => url('').'/admin/dashboard']);
                exit;
            } else {
                return response()->json(array('status' => false, 'msg' => "Credentials not matched !"));
                exit;
            }
        }
   
    }


    public function logout()
    {
        // $admin = Auth::guard('admin')->user()->id;
        Auth::logout();
        Session::flush();
        return redirect('/admin');
    }



}
