@extends('extends.admin')

@section('title','浏览用户')


@section('content')

<!--     @if(session('info'))
    <div class="mws-form-message warinig">
       {{session('info')}}
    </div>  
    @endif -->

                @if (session('info'))
                    <div class="mws-form-message info">
                        <ul>
                                <li>{{session('info')}}</li>
                        </ul>
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
                                            <th class="table-title">用户名</th>
                                            <th class="table-title">头像</th>
                                            <th class="table-type">权限</th>
                                            <th class="table-date am-hide-sm-only">注册时间</th>
                                            <th class="table-set">操作</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                     @foreach($users as $k=>$v)
                                        <tr>
                                            <td>{{$v->uid}}</td>
                                            <td>{{$v->username}}</td>
                                            <td>
                                               <img src="{{$v->img}}" alt="" width="50px"> 
                                            </td>
                                            <td class="am-hide-sm-only">
                                                @if($v->auth=='1')
                                                    普通用户
                                                @elseif($v->auth=='0')
                                                    后台管理员
                                                @endif
                                            </td>
                                            <td class="am-hide-sm-only">{{date('Y-m-d H:i:s',$v->addtime)}}</td>
                                            <td>
                                                <a class="btn btn-info pull-left" href="/admin/users/{{$v->uid}}/edit" role="button">修改</a>

                                               <form action="/admin/users/{{$v->uid}}" method="post" style='display:inline'>
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
                                {{ $users->appends($arr)->links() }}
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
