<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //登陆页面
    public function index()
    {
        return view('login.index');
    }

    public function login(Request $request)
    {
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required|min:3|max:20|',
        ]);

        $user = request(['email','password']);
        if(\Auth::attempt($user))
        {
            return redirect('/home');
        }
        else
            return redirect()->back()->withInput()->withErrors('登陆失败');
    }

    public function logout()
    {
        \Auth::logout();
        return redirect('/');
    }
}
