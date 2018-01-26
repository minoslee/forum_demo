@extends("layout.main")
@section("content")
    @include('UEditor::head');
    <div class="col-sm-8 blog-main">
        <form action="{{url('/article/create')}}" method="POST">
            {{csrf_field()}}
            <div class="form-group">
                <label>标题</label>
                <input name="title" type="text" class="form-control" placeholder="这里是标题">
            </div>
            {{--<div class="form-group">--}}
                {{--<label>内容</label>--}}
                {{--<textarea id="content"  style="height:400px;max-height:500px;" name="content" class="form-control" placeholder="这里是内容"></textarea>--}}
            {{--</div>--}}
            <script id="container" name="content" type="text/plain">

            </script>
            @include("layout.error")
            <button type="submit" class="btn btn-default">提交</button>
        </form>
        <br>

    </div><!-- /.blog-main -->

    <script type="text/javascript">
        var ue = UE.getEditor('container');
        ue.ready(function() {
            ue.execCommand('serverparam', '_token', '{{ csrf_token() }}');//此处为支持laravel5 csrf ,根据实际情况修改,目的就是设置 _token 值.
        });
    </script>
@endsection