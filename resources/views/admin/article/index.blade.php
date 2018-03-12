<html>
<head>
    <meta charset="UTF-8">
    <title>小水滴后台管理</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="{{URL::asset('/assets/css/vendor.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('/assets/css/flat-admin.css')}}">

    <!-- Theme -->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('/assets/css/theme/blue-sky.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('/assets/css/theme/blue.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('/assets/css/theme/red.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('/assets/css/theme/yellow.css')}}">

</head>
<body>
<div class="app app-default">
    <aside class="app-sidebar" id="sidebar">
        <div class="sidebar-header">
            <a class="sidebar-brand" href="#"><span class="highlight">小水滴</span> Admin</a>
            <button type="button" class="sidebar-toggle">
                <i class="fa fa-times"></i>
            </button>
        </div>
        <div class="sidebar-menu">
            <ul class="sidebar-nav">
                <li class="active">
                    <a href="./index.html">
                        <div class="icon">
                            <i class="fa fa-tasks" aria-hidden="true"></i>
                        </div>
                        <div class="title">首页</div>
                    </a>
                </li>

                <li class="dropdown ">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <div class="icon">
                            <i class="fa fa-cube" aria-hidden="true"></i>
                        </div>
                        <div class="title">论坛管理</div>
                    </a>
                    <div class="dropdown-menu">
                        <ul>
                            <!-- <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i> UI Kits</li> -->
                            <li><a href="{{URL::asset('/admin/comments')}}">评论管理</a></li>
                            <li><a href="{{URL::asset('/admin/articles')}}">文章管理</a></li>
                            <li><a href="{{URL::asset('/admin/links')}}">链接管理</a></li>

                            <!-- <li class="line"></li>
                            <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i> Advanced Components</li>
                            <li><a href="./uikits/pricing-table.html">Pricing Table</a></li> -->
                            <!-- <li><a href="./uikits/timeline.html">Timeline</a></li>
                            <li><a href="./uikits/chart.html">Chart</a></li> -->
                        </ul>
                    </div>
                </li>

                <li class="dropdown ">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <div class="icon">
                            <i class="fa fa-cube" aria-hidden="true"></i>
                        </div>
                        <div class="title">内容管理</div>
                    </a>
                    <div class="dropdown-menu">
                        <ul>
                            <!-- <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i> UI Kits</li> -->
                            <li><a href="./uikits/customize.html">分类</a></li>
                            <li><a href="./uikits/components.html">文章</a></li>
                            <li><a href="./uikits/card.html">页面</a></li>

                            <!-- <li class="line"></li>
                            <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i> Advanced Components</li>
                            <li><a href="./uikits/pricing-table.html">Pricing Table</a></li> -->
                            <!-- <li><a href="./uikits/timeline.html">Timeline</a></li>
                            <li><a href="./uikits/chart.html">Chart</a></li> -->
                        </ul>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <div class="icon">
                            <i class="fa fa-cogs" aria-hidden="true"></i>
                        </div>
                        <div class="title">网站信息</div>
                    </a>
                    <!-- <div class="dropdown-menu">
                      <ul>
                        <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i> Admin</li>
                        <li><a href="./pages/form.html">Form</a></li>
                        <li><a href="./pages/profile.html">Profile</a></li>
                        <li><a href="./pages/search.html">Search</a></li>
                        <li class="line"></li>
                        <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i> Landing</li> -->
                    <!-- <li><a href="./pages/landing.html">Landing</a></li>
                    <li><a href="./pages/login.html">Login</a></li>
                    <li><a href="./pages/register.html">Register</a></li>
                    <!-- <li><a href="./pages/404.html">404</a></li> -->
                    <!-- </ul>
                  </div>  -->
                </li>
            </ul>
        </div>
        <div class="sidebar-footer">
            <ul class="menu">
                <!-- <li>
                  <a href="/" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-cogs" aria-hidden="true"></i>
                  </a>
                </li> -->
                <li><a href="#"><span class="fa fa-chevron-up"></span></a></li>
            </ul>
        </div>
    </aside>

    <script type="text/ng-template" id="sidebar-dropdown.tpl.html">
        <div class="dropdown-background">
            <div class="bg"></div>
        </div>
        <div class="dropdown-container">
            {{--{{list}}--}}
        </div>
    </script>
    <div class="app-container">

        <nav class="navbar navbar-default" id="navbar">
            <div class="container-fluid">
                <div class="navbar-collapse collapse in">
                    <ul class="nav navbar-nav navbar-mobile">
                        <li>
                            <button type="button" class="sidebar-toggle">
                                <i class="fa fa-bars"></i>
                            </button>
                        </li>
                        <li class="logo">
                            <a class="navbar-brand" href="#"><span class="highlight">Flat v3</span> Admin</a>
                        </li>
                        <li>
                            <button type="button" class="navbar-toggle">
                                <img class="profile-img" src="./assets/images/profile.png">
                            </button>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-left">
                        <li class="navbar-title">控制台</li>
                        <li class="navbar-search hidden-sm">
                            <input id="search" type="text" placeholder="Search..">
                            <button class="btn-search"><i class="fa fa-search"></i></button>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <!-- <li class="dropdown notification">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <div class="icon"><i class="fa fa-shopping-basket" aria-hidden="true"></i></div>
                            <div class="title">New Orders</div>
                            <div class="count">0</div>
                          </a>
                          <div class="dropdown-menu">
                            <ul>
                              <li class="dropdown-header">Ordering</li>
                              <li class="dropdown-empty">No New Ordered</li>
                              <li class="dropdown-footer">
                                <a href="#">View All <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                              </li>
                            </ul>
                          </div>
                        </li> -->
                        <!-- <li class="dropdown notification warning">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <div class="icon"><i class="fa fa-comments" aria-hidden="true"></i></div>
                            <div class="title">Unread Messages</div>
                            <div class="count">99</div>
                          </a>
                          <div class="dropdown-menu">
                            <ul>
                              <li class="dropdown-header">Message</li>
                              <li>
                                <a href="#">
                                  <span class="badge badge-warning pull-right">10</span>
                                  <div class="message">
                                    <img class="profile" src="https://placehold.it/100x100">
                                    <div class="content">
                                      <div class="title">"Payment Confirmation.."</div>
                                      <div class="description">Alan Anderson</div>
                                    </div>
                                  </div>
                                </a>
                              </li>
                              <li>
                                <a href="#">
                                  <span class="badge badge-warning pull-right">5</span>
                                  <div class="message">
                                    <img class="profile" src="https://placehold.it/100x100">
                                    <div class="content">
                                      <div class="title">"Hello World"</div>
                                      <div class="description">Marco  Harmon</div>
                                    </div>
                                  </div>
                                </a>
                              </li>
                              <li>
                                <a href="#">
                                  <span class="badge badge-warning pull-right">2</span>
                                  <div class="message">
                                    <img class="profile" src="https://placehold.it/100x100">
                                    <div class="content">
                                      <div class="title">"Order Confirmation.."</div>
                                      <div class="description">Brenda Lawson</div>
                                    </div>
                                  </div>
                                </a>
                              </li>
                              <li class="dropdown-footer">
                                <a href="#">View All <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                              </li>
                            </ul>
                          </div>
                        </li> -->
                        <!-- <li class="dropdown notification danger">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <div class="icon"><i class="fa fa-bell" aria-hidden="true"></i></div>
                            <div class="title">System Notifications</div>
                            <div class="count">10</div>
                          </a>
                          <div class="dropdown-menu">
                            <ul>
                              <li class="dropdown-header">Notification</li>
                              <li>
                                <a href="#">
                                  <span class="badge badge-danger pull-right">8</span>
                                  <div class="message">
                                    <div class="content">
                                      <div class="title">New Order</div>
                                      <div class="description">$400 total</div>
                                    </div>
                                  </div>
                                </a>
                              </li>
                              <li>
                                <a href="#">
                                  <span class="badge badge-danger pull-right">14</span>
                                  Inbox
                                </a>
                              </li>
                              <li>
                                <a href="#">
                                  <span class="badge badge-danger pull-right">5</span>
                                  Issues Report
                                </a>
                              </li>
                              <li class="dropdown-footer">
                                <a href="#">View All <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                              </li>
                            </ul>
                          </div>
                        </li> -->
                        <li class="dropdown profile">
                            <a href="/html/pages/profile.html" class="dropdown-toggle"  data-toggle="dropdown">
                                <img class="profile-img" src="./assets/images/profile.png">
                                <div class="title">小水滴</div>
                            </a>
                            <div class="dropdown-menu">
                                <div class="profile-info">
                                    <h4 class="username"></h4>
                                </div>
                                <ul class="action">
                                    <li>
                                        <a href="#">
                                            修改密码
                                        </a>
                                    </li>
                                    <!-- <li>
                                      <a href="#">
                                        <span class="badge badge-danger pull-right">5</span>
                                        My Inbox
                                      </a>
                                    </li> -->
                                    <li>
                                        <a href="#">
                                            退出
                                        </a>
                                    </li>
                                    <<!-- li>
                <a href="#">
                  Logout
                </a>
              </li> -->
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="btn-floating" id="help-actions">
            <div class="btn-bg"></div>
            <button type="button" class="btn btn-default btn-toggle" data-toggle="toggle" data-target="#help-actions">
                <i class="icon fa fa-plus"></i>
                <span class="help-text">添加</span>
            </button>
            <div class="toggle-content">
                <ul class="actions">
                    <li><a href="#">页面</a></li>
                    <li><a href="#">文章</a></li>

                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <div class="card">
                    <div class="card-header">
                        文章列表
                    </div>
                    <div class="card-body no-padding">
                        <table class=" table table-striped primary" cellspacing="0" width="100%">
                            <thead>

                                <tr>
                                    <th>文章标题</th>
                                    <th>文章作者</th>
                                    <th>创建时间</th>
                                    <th>回复数量</th>
                                    <th>点赞数量</th>
                                    <th>状态</th>
                                    <th>操作</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($posts as $post)
                                <tr>
                                    <td><a href="{{url("/article/$post->id/")}}" target="_blank" >{{$post->title}}</a></td>
                                    <td>{{$post->user->name}}</td>
                                    <td>{{$post->created_at}}</td>
                                    <td>{{$post->reply_cnt}}</td>
                                    <td>{{$post->zan_cnt}}</td>
                                    @if($post->status == 0)
                                    <td>未审核</td>
                                    @elseif($post->status == -1)
                                    <td>未通过审核</td>
                                    @else
                                    <td>通过审核</td>
                                    @endif
                                    <td>
                                        <form action="{{ url('admin/articles/'.$post->id.'/confirm' )}}" method="POST" style="display: inline;">
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-success">通过</button>
                                        </form>
                                        <form action="{{ url('admin/articles/'.$post->id.'/reject' )}}" method="POST" style="display: inline;">
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn btn-warning">拒绝</button>
                                        </form>
                                        <form action="{{ url('admin/articles/'.$post->id.'/del' )}}" method="POST" style="display: inline;">
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger">删除</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{$posts->links()}}
        </div>
    </div>
    <script type="text/javascript" src="{{URL::asset('/assets/js/vendor.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('/assets/js/app.js')}}"></script>

</body>
</html>