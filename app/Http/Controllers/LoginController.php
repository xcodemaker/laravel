<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public  function login(){
        return view("login");
    }
    public  function login_post(Request $request){
       //dd($request->input());
       $inputs=$request->input();
       $user_name=$inputs['uname'];
       $password=$inputs['psw'];
       //$user=new User();
       if(Auth::attempt(['user_name' => $user_name, 'password' => $password])){
        //return redirect()->intended('home');
        //dd("success");
        //home();
        return redirect('/home');
       }else{
           return redirect('/login');
       }
    }
    // public  function home(){
    //     return view("home");
    // }
}
