<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //注册页面
    public function index()
    {
        return view('register.index');
    }
    //注册行为
    public function register(Request $request)
    {
        $this->validate($request,[
           'name'=>'required|min:3|max:255',
           'email'=>'required|email',
           'password'=>'required|min:3|max:20|confirmed',
        ]);
        $user = new User;
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = bcrypt($request->get('password'));

        if($user->save() == true)
            return redirect('/login');
        else
            return redirect('/');
    }
}
