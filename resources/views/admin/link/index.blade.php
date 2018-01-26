@extends("admin.layout.main")

@section("content")
    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-10 col-xs-6">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">链接列表</h3>
                    </div>
                    <a type="button" class="btn " href="{{url('/admin/links/add')}}" >增加链接</a>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-bordered">
                            <tbody><tr>
                                <th style="width: 10px">#</th>
                                <th>链接名称</th>
                                <th>链接url</th>
                                <th>操作</th>
                            </tr>
                            @foreach($links as $link)
                                <tr>
                                    <td>{{$link->id}}.</td>
                                    <td>{{$link->title}}</td>
                                    <td>{{$link->url}}</td>
                                    <td>
                                        <form action="{{ url('admin/links/'.$link->id.'/del' )}}" method="POST" style="display: inline;">
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger">删除</button>
                                        </form>
                                    </td>
                                   {{--del--}}
                                </tr>
                            @endforeach
                            </tbody></table>
                        @include('admin.layout.error')
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection