<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use App\Comment;
use App\Zan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    //文章列表
    public function index()
    {
        $posts = Article::orderBy('created_at',
            'desc')->paginate(10);
        return view('admin.article.index',compact('posts'));
    }

    public function reject($id,Request $request)
    {
        $article = Article::find($id);
        $article->status = -1;
        $article->save();
        return back();
    }

    public function confirm($id,Request $request)
    {
        $article = Article::find($id);
        $article->status = 1;
        $article->save();
        return back();
    }

    public function del($id,Request $request)
    {
        $article = Article::find($id);
        $article->delete();
        Comment::where('article_id',$id)->delete();
        Zan::where('article_id',$id)->delete();
        return back();
    }
}
