<?php

namespace App\Http\Controllers;

use App\Article;
use App\Comment;
use App\Link;
use App\User;
use App\Zan;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //首页
    public function index()
    {
        $articles = Article::where('status','!=',-1)->orderBy('created_at','desc')->withCount(['comment','zans'])->paginate(5);
        $links = Link::all();
        return view('article.index',compact(['articles','links']));
    }

    //zan
    public function hot()
    {
        $articles = Article::where('status','!=',-1)->orderBy('zan_cnt','desc')->withCount(['comment','zans'])->paginate(5);
        $links = Link::all();
        return view('article.index',compact(['articles','links']));
    }

    //recent
    public function recent()
    {
        $articles = Article::where('status','!=',-1)->orderBy('created_at','desc')->withCount(['comment','zans'])->paginate(5);
        $links = Link::all();
        return view('article.index',compact(['articles','links']));
    }

    //reply
    public function reply()
    {
        $articles = Article::where('status','!=',-1)->
        orderBy('reply_cnt','desc')->
        withCount(['comment','zans'])->
        paginate(5);
        $links = Link::all();
        return view('article.index',compact(['articles','links']));
    }

    public function create()
    {
        $links = Link::all();

        return view('article.create',compact('links'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required|max:255|min:4',
            'content'=>'required|min:10',
        ]);
        $article = new Article;
        $article->title = $request->get('title');
        $article->content = $request->get('content');
        $article->user_id = \Auth::User()->id;
        if($article->save())
            return redirect('/home');
        else
            return redirect()->back()->withInput()->withErrors("新增失败");
    }

    //详情页
    public function show($id)
    {
        $links = Link::all();
        $article = Article::find($id);
        return view('article.main',compact(['article','links']));
    }
    
    //更新页面
    public function edit($id)
    {
        return view('article.edit')->with('article',Article::find($id));
    }

    //更新行为
    public function update(Request $request,$id)
    {
        $this->validate($request,[
            'title'=>'required',
            'content'=>'required|min:5',
        ]);
        $article = Article::find($id);
        $article->title = $request->get('title');
        $article->content = $request->get('content');
        $article->user_id = \Auth::User()->id;
        //$article->save();
        if($article->save())
            return redirect("/article/{$article->id}");
        else
            return redirect()->back()->withInput()->withErrors('更新失败');
    }

    public function del($id)
    {
        Article::find($id)->delete();
        return redirect()->back()->withInput()->withErrors('删除成功！');
    }

    //  提交评论
    public function comment(Request $request)
    {
        if(!\Auth::check())
            return redirect('/login');
        $this->validate($request,[
            'content'=>'required|min:3',
            'article_id'=>'required|exists:articles,id',
        ]);

        $comment = new Comment();
        $comment->user_id = \Auth::User()->id;
        $comment->content = $request->get('content');
        $comment->article_id = $request->get('article_id');

        $article = Article::find($request->get('article_id'));
        $article->reply_cnt = $article->reply_cnt+1;
        $article->save();

        if($comment->save())
            return redirect()->back();
        else
            return redirect()->back()->withInput()->withErrors('评论失败');
    }

    public function zan($id)
    {
        if(!\Auth::check())
            return redirect('/login');
        $zan = new Zan();
        $zan->user_id = \Auth::id();
        $zan->article_id = $id;

        $article = Article::find($id);
        $article->zan_cnt = $article->zan_cnt + 1;
        $article->save();
        if($zan->save())
            return redirect()->back();
    }
}
