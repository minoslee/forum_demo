
@extends("layout.main")

@section("content")
<div class="col-sm-8 blog-main">
    <div style="height: 80px; padding-bottom: 20px;">
        <a href="{{url('recent')}} " style="margin-left: 30px;"><button type="button" class="btn btn-info btn-sm">最新发布</button></a>
        <a href="{{url('hot')}}"    style="margin-left: 30px;"><button type="button" class="btn btn-info btn-sm">最多推荐</button></a>
        <a href="{{url('reply')}}" style="margin-left: 30px;"><button type="button" class="btn btn-info btn-sm">最多回复</button></a>
    </div>
    <div>
        @foreach($articles as $article)
            @if($article->status != -1)
                <div class="blog-post">
                    <h2 class="blog-post-title"><a href="{{url('/article/'.$article->id)}}" >{{$article->title}}</a></h2>
                    <p class="blog-post-meta">{{$article->created_at}} by <a href="{{url('/user/'.$article->user->id)}}">{{$article->user->name}}</a></p>
                    {!! str_limit($article->content, 100, '...') !!}
                    <p class="blog-post-meta">赞 {{$article->zans_count}}  | 回复 {{$article->comment_count}}</p>
                </div>
            @endif
        @endforeach
        {{$articles->links()}}
    </div><!-- /.blog-main -->
</div>
@endsection