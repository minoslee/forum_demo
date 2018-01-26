<?php

namespace App\Http\Controllers\Admin;

use App\Link;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LinkController extends Controller
{
    //index
    public function index()
    {
        $links = Link::all();
        return view('admin.link.index',compact('links'));
    }
    
    //add
    public function create()
    {
        return view('admin.link.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
            'url'=>'required',
        ]);

        $link = new Link();
        $link->title = $request->get('title');
        $link->url = $request->get('url');

        $link->save();
        return redirect('/admin/links');
    }

    public function del($id)
    {
        $link = Link::find($id);
        $link->delete();
        return back();
    }
}
