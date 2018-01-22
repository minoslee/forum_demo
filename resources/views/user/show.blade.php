@extends("layout.main")
@section("content")
    <div class="col-sm-8">
        <blockquote>
            <p> {{$users->name}}
            </p>
            <footer>文章：{{$users->articles_count}}</footer>
        </blockquote>
    </div>
    <div class="col-sm-8 blog-main">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">文章</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab_1">
                    @foreach($articles as $article)
                        <div class="blog-post" style="margin-top: 30px">
                            <?php \Carbon\Carbon::setLocale('zh');?>
                            <p class=""><a href="{{url('/user/'.$article->user->id)}}">{{$article->user->name}}</a> {{$article->created_at->diffForHumans()}}</p>
                            <p class=""><a href="{{url('/article/'.$article->id)}}" >{{$article->title}}</a></p>
                            <p>{!! str_limit($article->content, 100, '...') !!}</p>
                        </div>
                    @endforeach
                </div>
            </div>
            <!-- /.tab-content -->
        </div>
    </div><!-- /.blog-main -->
@endsection