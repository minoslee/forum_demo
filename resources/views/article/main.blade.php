@extends("layout.main")

@section("content")

        <div class="col-sm-8 blog-main">
            <div class="blog-post">
                <div style="display:inline-flex">
                    <h2 class="blog-post-title">{{$article->title}}</h2>
                    <a style="margin: auto"  href="{{url('/article/'.$article->id.'/edit')}}">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>
                    <a style="margin: auto"  href="{{url('/article/'.$article->id.'/del')}}">
                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                    </a>
                    <form action="{{ url('/articles/'.$article->id.'/del')}}" method="POST" style="display: inline;">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger">删除</button>
                    </form>

                </div>

                <p class="blog-post-meta">{{$article->created_at}} <a href="#">{{$article->user->name}}</a></p>
                {{$article->content}}
                <div>
                    @if ($article->zan()->exists())
                        <a href="#" type="button" class="btn btn-primary btn-lg">您已赞过</a>
                    @else
                        <a href="{{url('/article/'.$article->id.'/zan')}}" type="button" class="btn btn-primary btn-lg">赞</a>
                    @endif
                </div>
            </div>

            <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading">评论</div>

                <!-- List group -->
                <ul class="list-group">
                    @foreach($article->comment as $comment)
                        <li class="list-group-item">
                            <h5>{{$comment->created_at}} by {{$comment->user->name}}</h5>
                            <div>
                                {{$comment->content}}
                            </div>
                        </li>
                    @endforeach

                </ul>
            </div>

            <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading">发表评论</div>

                <!-- List group -->
                <ul class="list-group">
                    <form action="{{url('/article/'.$article->id.'/comment')}}" method="post">
                        {{csrf_field()}}
                        <input type="hidden" name="article_id" value="{{$article->id}}"/>
                        @include('layout.error')
                        <li class="list-group-item">
                            <textarea name="content" class="form-control" rows="10"></textarea>
                            <button class="btn btn-default" type="submit">提交</button>
                        </li>
                    </form>

                </ul>
            </div>

        </div><!-- /.blog-main -->

@endsection
