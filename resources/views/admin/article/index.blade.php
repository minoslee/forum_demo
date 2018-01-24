@extends("admin.layout.main")

@section("content")
    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-10 col-xs-6">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">文章列表</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-bordered">
                            <tbody><tr>
                                <th style="width: 10px">#</th>
                                <th>文章标题</th>
                                <th>操作</th>
                            </tr>
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{$post->id}}</td>
                                    <td><a href="{{url('/article/'.$post->id)}}" target="_blank">{{$post->title}}</a></td>
                                    @if($post->status == 0)
                                        <td>未审核</td>
                                    @elseif($post->status == -1)
                                        <td>未通过审核</td>
                                    @else
                                        <td>通过审核</td>
                                    @endif
                                    <td>
                                        {{--<button type="button" class="btn btn-block btn-default post-audit" post-id="{{$post->id}}" post-action-status="1" >通过</button>--}}
                                        {{--<button type="button" class="btn btn-block btn-default post-audit" post-id="{{$post->id}}" post-action-status="-1" >拒绝</button>--}}
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
                            </tbody></table>
                    </div>
                    {{$posts->links()}}
                </div>
            </div>
        </div>
    </section>
@endsection