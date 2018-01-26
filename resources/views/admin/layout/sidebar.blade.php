<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
                <li class="treeview active">
                    <a href="{{URL::asset('/admin/users')}}">
                        <i class="fa fa-dashboard"></i> <span>用户管理</span>
                        <span class="pull-right-container"></span>
                    </a>
                </li>
                <li class="active treeview">
                    <a href="{{URL::asset('/admin/articles')}}">
                        <i class="fa fa-dashboard"></i> <span>文章管理</span>
                    </a>
                </li>
                <li class="active treeview">
                    <a href="{{URL::asset('/admin/comments')}}">
                        <i class="fa fa-dashboard"></i> <span>评论管理</span>
                    </a>
                </li>
                <li class="active treeview">
                    <a href="{{URL::asset('/admin/links')}}">
                        <i class="fa fa-dashboard"></i> <span>链接管理</span>
                    </a>
                </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

