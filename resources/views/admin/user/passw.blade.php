@extends("admin.layout.main")

@section("content")
    <!-- Main content -->
    <section class="content">

        <div class="login-box-body">
            <p class="login-box-msg">修改密码</p>
            <form action="{{url('/admin/users/'.$user->id.'/passw')}}" method="post">
                {{csrf_field()}}
                <div class="form-group has-feedback">
                    {{$user->name}}
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input name="password" type="password" class="form-control" placeholder="密码">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                @include('admin.layout.error')
                <div class="row">
                    <!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">提交修改</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

        </div>
    </section>
@endsection