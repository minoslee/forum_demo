<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use App\Model;

class Comment extends Model
{

    protected $table = "comments";

    //评论所属文章
    public function article()
    {
        return $this->belongsTo(Article::class,'article_id','id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
