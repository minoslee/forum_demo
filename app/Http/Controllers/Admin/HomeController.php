<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    //后台首页
    public function index()
    {
        return view('admin.home.index');
    }

    public function test()
    {
        return view('admin.index');

    }
}
