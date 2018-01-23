@extends("layout.main")
@section("content")
    <div class="col-sm-8 blog-main">
        <form class="form-horizontal" action="{{url("/user/".\Auth::id()."/setting")}}" method="POST">
            {{csrf_field()}}
            <div class="form-group">
                <label class="col-sm-2 control-label">用户名</label>
                <div class="col-sm-10">
                    <input class="form-control" name="name" type="text" value="{{$users->name}}">
                </div>
            </div>
            @include('layout.error')
            <button type="submit" class="btn btn-default">修改</button>
        </form>
        <br>
    </div>
@endsection