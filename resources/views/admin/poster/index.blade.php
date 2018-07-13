@extends('extends.admin')

@section('title','广告浏览')


@section('content')

    @if(session('info'))
    <div class="mws-form-message warinig">
       {{session('info')}}
    </div>  
    @endif


    <div class="tpl-portlet-components">
                <div class="portlet-title">
                    <div class="caption font-green bold">
                        <span class="am-icon-code"></span> 列表
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-7">
                       <form class="form-inline">
                                <div class="form-group">
                                    <label for="exampleInputEmail2">姓名</label>
                                   
                                    <input type="text" class="form-control" id="exampleInputEmail2" name="sou" placeholder="请输入查询姓名">
                                </div>
                            <button type="submit" class="btn btn-default">
                                搜索
                            </button>
                        </form>
                    </div>
                </div>

                <div class="tpl-block">
                   
                
                    <div class="am-g">
                        <div class="am-u-sm-12">
                            
                                <table class="am-table am-table-striped am-table-hover table-main">
                                    <thead>
                                        <tr>
                                            <th class="table-id">ID号</th>
                                            <th class="table-title">广告商家</th>
                                            <th class="table-title">广告图片</th>
                                            <th class="table-date am-hide-sm-only">链接地址</th>
                                            <th class="table-title">添加时间</th>
                                            <th class="table-set">操作</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($res as $k=>$v)
                                        <tr>
                                            <td>{{$v->posterid}}</td>
                                            <td>{{$v->postername}}</td>
                                            <td>
                                                <img src="{{$v->img}}" alt="" style="width:50px">
                                            </td>
                                            <td>{{$v->imgurl}}</td>
                                            <td class="am-hide-sm-only">{{date('Y-m-d H:i:s',$v->addtime)}}</td>
                                            <td>
                                                <a class="btn btn-info pull-left" href="/admin/poster/{{$v->posterid}}/edit" role="button">修改</a>

                                               <form action="/admin/poster/{{$v->posterid}}" method="post" style='display:inline' enctype="multipart/form-data">
                                                 {{ csrf_field() }}
                                                 {{ method_field('DELETE') }}
                                                 <button class="btn btn-danger" onclick="return confirm('确定要删除么??');">删除</button>
                                                </form>
                                            </td>
                                        </tr>
                                     @endforeach
                                    </tbody>
                                </table>
                                <div class="dataTables_paginate paging_full_numbers" id="paginate">
                                {{ $res->appends($arr)->links() }}
                                </div>
         
                        </div>
                    </div>
                </div>
            </div>
@endsection

@section('js')
<script type="text/javascript">
       
        $('.mws-form-message').fadeOut(5000);
</script>

@endsection
