<?php

namespace App\Http\Controllers\Admin;

use App\AdminUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    //登陆页面
    public function index()
    {
        return view('admin.login.index');
    }

    //登陆行为
    public function login(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3',
            'password' => 'required|min:3|max:20|',
        ]);

        $user = request(['name', 'password']);
        if (true == \Auth::guard('admin')->attempt($user)) {
            return redirect('/admin/home');
        }
        else
            return redirect()->back()->withInput()->withErrors('登陆失败');
    }

}
