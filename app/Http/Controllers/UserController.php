<?php

namespace App\Http\Controllers;

use App\Link;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //个人中心页面
    public function show($id)
    {
        $links = Link::all();
        $users = User::withCount('articles')->find($id);
        $articles = $users->articles()->orderBy('created_at','desc')->paginate(10);
        return view('user.show',compact('users','articles','links'));
    }

    //个人设置页面
    public function setting($id)
    {
        $links = Link::all();
        $users = User::find($id);
        return view('user.setting',compact('links','users'));
    }

    //个人设置行为
    public function settingStore(Request $request,$id)
    {
        $this->validate($request,[
            'name'=>'required|min:3|max:255',
        ]);

        $name = $request->get('name');
        $user = User::find($id);
        //dd($user);
        if($name != $user->name)
        {
            if(User::where('name',$name)->count() > 0)
            {
                return redirect()->back()->withInput()->withErrors('用户名已被注册');
            }
            $user->name = $name;
            $user->save();
            return back()->withInput()->withErrors('修改成功！');
        }
        else
        {
            return redirect()->back()->withInput()->withErrors('请输入新的用户名');
        }
    }


}
