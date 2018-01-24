@extends("admin.layout.main")

@section("content")
    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-10 col-xs-6">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">评论列表</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-bordered">
                            <tbody>
                                @foreach($comments as $comment)
                                {{--<th style="width: 10px">#</th>--}}
                                <tr>
                                    <th>评论内容</th>
                                    <th>所属文章</th>
                                    <th>操作</th>
                                </tr>
                                <td>{{$comment->content}}</td>
                                <td><a href="{{url('/article/'.$comment->article->id)}}" target="_blank">{{$comment->article->title}}</a></td>
                                <td>
                                    <form action="{{ url('admin/comments/'.$comment->id.'/del' )}}" method="POST" style="display: inline;">
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger">删除</button>
                                    </form>
                                </td>
                            @endforeach
                            </tbody></table>
                    </div>
                    {{--{{$articles->links()}}--}}
                </div>
            </div>
        </div>
    </section>
@endsection