<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Http\Requests\UserRegisterRequest;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(UserRegisterRequest $request){
        
        $user = new User();
        $user->email=$request->input('email');
        $user->username=$request->input('username');
        $user->password= bcrypt($request->input('password'));

        $user->save();
        return response()->json([
            'message'=>'Registration Successfull'
        ]);
    }
}
