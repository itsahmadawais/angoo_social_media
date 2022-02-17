<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function signup(Request $request){
        $validator = Validator::make($request->all(), [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'string', 'unique:users'],
            'gender_id' => ['required'],
            'password' => ['required', 'string', 'min:8'],
        ]);
      
        if ($validator->fails()) {
          return response()->json($validator->errors(), 400);
        }
        $data = $request->all();
        $email = explode("@",$request->email);
        $email = $email[0];
        $data['username'] = strtolower($email).Str::random(3);
        $data['name'] = $request->first_name." ".$request->last_name;
        $data['role_id'] = 3;
        $data['password'] = Hash::make($request->password);
        $user = User::create($data);
        if($user!==null){
            return $this->login($request);
        }
        else{
            return response()->json([
                'error' => 'Account can\'t be created!'
            ],400);
        }
    }
    public function login(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
        ]);
      
        if ($validator->fails()) {
          return response()->json($validator->errors(), 400);
        }
        if(auth()->attempt(['email' => $request->email,'password' => $request->password])){
            return response()->json([
                'success' => 'success',
                'message' => 'User Logged in!',
                'redirect' => url('/feed')
            ],200);
        }
        else{
            return response()->json([
                'error' => 'error',
                'message' => 'Wrong credentials!'
            ],404);
        }
    }
}
