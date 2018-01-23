<!DOCTYPE html>
<html>
@include('admin.layout.head')
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="/adminlte/index2.html" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg">后台</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="/adminlte/#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="/adminlte/#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="{{URL::asset('/adminlte/dist/img/user2-160x160.jpg')}}" class="user-image" alt="User Image">
                            <span class="hidden-xs">test1</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-right">
                                    <a href="/admin/logout" class="btn btn-default btn-flat">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="treeview active">
                    <a href="#">
                        <i class="fa fa-dashboard"></i> <span>系统管理</span>
                        <span class="pull-right-container"></span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="/admin/permissions"><i class="fa fa-circle-o"></i> 权限管理</a></li>
                        <li><a href="/admin/users"><i class="fa fa-circle-o"></i> 用户管理</a></li>
                        <li><a href="/admin/roles"><i class="fa fa-circle-o"></i> 角色管理</a></li>
                    </ul>
                </li>
                <li class="active treeview">
                    <a href="/admin/posts">
                        <i class="fa fa-dashboard"></i> <span>文章管理</span>
                    </a>
                </li>
                <li class="active treeview">
                    <a href="/admin/topics">
                        <i class="fa fa-dashboard"></i> <span>专题管理</span>
                    </a>
                </li>
                <li class="active treeview">
                    <a href="/admin/notices">
                        <i class="fa fa-dashboard"></i> <span>通知管理</span>
                    </a>
                </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    欢迎
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

@include('admin.layout.script')
</body>
</html>
