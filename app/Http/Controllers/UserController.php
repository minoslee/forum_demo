<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //个人中心页面
    public function show($id)
    {
        $users = User::withCount('articles')->find($id);
        $articles = $users->articles()->orderBy('created_at','desc')->get();
        return view('user.show',compact('users','articles'));
    }

    //个人设置页面
    public function setting($id)
    {
        return view('user.setting')->with('users',User::find($id));
    }

    //个人设置行为
    public function settingStore(Request $request)
    {
        $this->validate($request,[
            'name'=>'required|min:3|max:255',
        ]);


    }


}
