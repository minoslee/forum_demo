<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use App\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    //
    public function index()
    {
        $comments = Comment::orderBy('created_at','desc')->get();
        return view('admin.comment.index',compact('comments'));
    }

    public function del($id)
    {
        Comment::find($id)->delete();
        return redirect('/admin/comments');
    }
}
