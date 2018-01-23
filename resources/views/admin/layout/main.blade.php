<!DOCTYPE html>
<html>
@include('admin.layout.head')
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

@include("admin.layout.header")
<!-- Left side column. contains the logo and sidebar -->
@include("admin.layout.sidebar")
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

    @yield("content")
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
