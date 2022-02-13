# Spot-JOB PORTAL MANAGEMENT

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
                        return json_encode(['status' => true, 'msg' => "Success, Welcome Back!", 'location' => url('').'/user/dashboard']);
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
