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

}
