<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Input as Input;
use App\User;
class home extends Controller
{
  public function adduser(Request $request)
  {
    $user=new User();
    $user->user_name=$request->input('user_name');
    $user->first_name=$request->input('first_name');
    $user->last_name=$request->input('last_name');
    $user->email=$request->input('email');
    $user->website=$request->input('website');
    $user->password=bcrypt($request->input('password'));
    $user->save();
    return view('auth.login');
  }

}
