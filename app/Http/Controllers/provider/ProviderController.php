<?php

namespace App\Http\Controllers\provider;

use App\Http\Controllers\Controller;
use App\Models\JobProvider;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Validator;

class ProviderController extends Controller
{
    //

    public function dashboard()
    {
        return view('provider.dashboard');
    }
    
    public function register()
    {
        return view('provider.auth.register');
    }
    public function login()
    {
        return view('provider.auth.login');
    }

    public function providerRegistered(Request $request)
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
            $provider= new JobProvider();
            $provider->name         =   $request['first_name'] .' '.  $request['last_name'];
            $provider->email        =   $request['email'];
            $provider->password     =   Hash::make($request['password']);
            $created = $provider->save();
            if($created)
            {
                if (Auth::guard('job_provider')->attempt(['email' => $request->email, 'password' => $request->password])) {
                        return json_encode(['status' => true, 'msg' => "Success, Welcome Back!", 'location' => url('').'/provider/dashboard']);
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
            
            if (Auth::guard('job_provider')->attempt(['email' => $request->email, 'password' => $request->password])) {
                    return json_encode(['status' => true, 'msg' => "Success, Welcome Back!", 'location' => url('').'/provider/dashboard']);
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
