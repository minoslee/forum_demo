<?php

namespace App\Http\Controllers\Admin;

use App\AdminUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    //用户列表
    public function index()
    {
        $users = AdminUser::paginate(10);
        return view('admin.user.index',compact('users'));
    }
    
    //新增用户页面
    public function create()
    {
        return view('admin.user.create');
    }
    
    //新增用户行为
    public function store(Request $request)
    {
        $this->validate(request(), [
            'name' => 'required|min:3',
            'password' => 'required'
        ]);

        $user = new AdminUser();
        $user->name = $request->get('name');
        $user->password = bcrypt($request->get('password'));
        $user->remember_token = "NULL";

        if($user->save())
            return redirect('/admin/users');
        else
            return redirect()->back()->withInput()->withErrors('新增失败');
    }
}
