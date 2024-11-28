<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthManager extends Controller
{
    // function login(){
    //     if(Auth::check()){
    //         return redirect(route('home'));
    //     }
    //     return view('login');
    // }
    // function registration(){

    //     if(Auth::check()){
    //         return redirect(route('home'));
    //     }
    //     return view('registration');

    // }


   function loginPost(Request $request){
    $request->validate([
        'email' => 'required' ,
        'password' => 'required'
    ]);

    $credentials = $request->only('email','password');
    if(Auth::attempt($credentials)){
        return redirect()->intended(route('dashboard'))->with("success", "elcome to cccm");
    }
    return redirect(route('login'))->with("error", "login details are not valid");
    }

    function registrationPost(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users' ,
            'password' => 'required'
        ]);

        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['password']=Hash::make($request->password);
        $user = User::create($data);
        if(!$user){
            return redirect(route('registration'))->with("error", "Registration failed, try again.");
        }
       return redirect(route('login'))->with("success", "registration success, login to access the app");

        
    }

    function logout(Request $request){
        $request->session()->invalidate();
        $request->session()->regenerate();
        Auth:: logout();
        return redirect(route('login'));
    }
}
