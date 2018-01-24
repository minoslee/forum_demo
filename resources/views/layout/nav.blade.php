<div class="blog-masthead">
    <div class="container">
        <ul class="nav navbar-nav navbar-left">
            <li>
                <a class="blog-nav-item " href="{{url('/')}}">首页</a>
            </li>
            <li>
                <a class="blog-nav-item" href="{{url('article/create')}}">写文章</a>
            </li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <div style="padding-top: 10px;">
                    @if(!\Auth::check())
                        <a href="{{url('/login')}}" style="font-size: 18px;color: beige;">请登录</a>
                    @else
                    <a href="#" class="blog-nav-item dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> {{\Auth::user()->name}}<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                        <li><a href="{{url('/user/'.\Auth::id())}}">我的主页</a></li>
                        <li><a href="{{url('/user/'.\Auth::id().'/setting')}}">个人设置</a></li>
                        <li><a href="{{url('/logout')}}">登出</a></li>
                    </ul>
                    @endif
                </div>
            </li>
        </ul>
    </div>
</div>