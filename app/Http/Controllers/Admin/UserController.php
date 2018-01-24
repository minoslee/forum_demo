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
            'name' => 'required|min:3|unique:admin_users,name',
            'password' => 'required'
        ]);

        $user = new AdminUser();
        $user->name = $request->get('name');
        $user->password = bcrypt($request->get('password'));
        if($user->save()) {
            return redirect('/admin/users');
        }
        else
        {
            return redirect()->back()->withInput()->withErrors('新增失败');
        }
    }

    public function passw($id)
    {
        $user = AdminUser::find($id);
        if(\Auth::guard('admin')->user()->id == $id)
            return view('admin.user.passw',compact('user'));
        else
            return redirect()->back()->withInput()->withErrors('暂无权限');
    }

    public function edit(Request $request,$id)
    {
        $this->validate($request,[
            'password'=>'required',
        ]);

       $user = AdminUser::find($id);
       $user->password = bcrypt($request->get('password'));

       $user->save();
        return redirect("/admin/users/");
    }

}
