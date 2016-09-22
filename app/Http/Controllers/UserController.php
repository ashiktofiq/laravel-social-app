<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

use Auth;

use App\Post;

class UserController extends Controller
{   
    
    
    public function postSignUp(Request $request)
    {   
        $this->validate($request,[
            'email' => 'required|email|unique:users',
            'first_name' => 'required|max:100',
            'password' => 'required|min:4'
                      ]);
        $email = $request['email'];
        $first_name = $request['first_name'];
        $password = bcrypt($request['password']);
        $user = new User();
        $user->email = $email;
        $user->first_name = $first_name;
        $user->password = $password;
        $user->save();
        Auth::login($user);
        return redirect()->intended('dashboard');
    }
    
    public function postSignIn(Request $request)
    {   
        $this->validate($request,[
            'email' => 'required',
            'password' => 'required'
                      ]);
        //$this->validate($request, User::$create_validation_rules);
        if (Auth::attempt(['email' => $request->input("email"), 'password' => $request->input("password")])) {
            return redirect()->intended('dashboard');
        }
        return redirect()->back();
    }
    
    public function getLogout()
    {
        Auth::logout();
        return redirect()->intended('/');
    }
}
