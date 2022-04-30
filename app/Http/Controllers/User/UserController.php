<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\Session;
use session;

use Validator;

class UserController extends Controller
{
    //

    public function dashboard()
    {
        return view('admin.dashboard');
    }
    
    public function register()
    {
        return view('user.auth.register');
    }
    public function login()
    {
        return view('user.auth.login');
    }

    public function userRegistered(Request $request)
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
            $user= new User();
            $user->name         =   $request['first_name'] .' '.  $request['last_name'];
            $user->email        =   $request['email'];
            $user->password     =   Hash::make($request['password']);
            $created = $user->save();
            if($created)
            {
                if (Auth::guard('user')->attempt(['email' => $request->email, 'password' => $request->password])) {
                        return json_encode(['status' => true, 'msg' => "Success, Welcome Back!", 'location' => url('').'/']);
                        exit;
                } else {
                    return response()->json(array('status' => false, 'msg' => "Credentials not matched !"));
                    exit;
                }
            }
            else{
                return response()->json(array('status' => false, 'msg' => "Insufficient Data !"));
                exit;
            }
        }
   
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
            
            if (Auth::guard('user')->attempt(['email' => $request->email, 'password' => $request->password])) {
                    return json_encode(['status' => true, 'msg' => "Success, Welcome Back!", 'location' => url('').'/']);
                    exit;
            } else {
                return response()->json(array('status' => false, 'msg' => "Credentials not matched !"));
                exit;
            }
        }
   
    }


    public function userlogout()
    {

        // $admin = Auth::guard('admin')->user()->id;
        Auth::logout();
        Session::flush();
        return redirect('/user');
    }

    
}
