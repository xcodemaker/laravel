<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    //
    public  function register(){
        return view("register");
    }
    public  function register_post(Request $request){
       //dd($request->input());
       $inputs=$request->input();
       $first_name=$inputs['fname'];
       $last_name=$inputs['lname'];
       $user_name=$inputs['uname'];
       $password=$inputs['psw'];
       $user=new User();
       $user->first_name=$first_name;
       $user->last_name=$last_name;
       $user->user_name=$user_name;
       $user->password=bcrypt($password);
       $result=$user->save();
    //    dd($first_name,$last_name,$user_name,$password);
    if($request){
        return "success";

    }else{
        return "failed";
    }
    }
    public  function home(){
        //return view("register");
        $users=User::all();
        return view("home")->with(["user_data"=>$users]);
    }
}
