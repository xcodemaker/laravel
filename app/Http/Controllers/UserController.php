<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function user_update($id){
        //dd($id);
        $user=User::where('id',$id)->first();
        //dd($user);
        return view('user_update')->with(["user"=>$user]);
    }
    public function user_update_post(Request $request,$id){
        $inputs=$request->input();
        dd($inputs);

    }
}
