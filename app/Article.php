<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Article extends Model
{
    //关联用户
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    //关联评论
    public function comment()
    {
        return $this->hasMany(Comment::class)->orderBy('created_at','desc');
    }

    public function zan()
    {
        $id = \Auth::id();
        return $this->hasOne(Zan::class)->where('user_id','=',"$id");
    }
    //和文章进行点赞关联
    public function zans()
    {
        return $this->hasMany(Zan::class);
    }
}
