@extends('extends.admin')

@section('title', $title)
<style type="text/css">
    p{
        display: inline;
    }
    img{
        width:20px;
    }
    td{
        text-overflow:ellipsis;
    }
    table{
        overflow:hidden;

   
        table-layout:fixed;/* 只有定义了表格的布局算法为fixed，下面td的定义才能起作用。 */

    }
    .am-table tbody tr td{
      overflow: hidden; 
      text-overflow:ellipsis;  
      white-space: nowrap; 
 }
</style>


@section('content')
        @if (count($errors) > 0)
            <div class="mws-form-message info">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li style='font-size:16px;list-style:none'>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

<div class="tpl-portlet-components">
    <div class="portlet-title">
        <div class="caption font-green bold">
            <span class="am-icon-code"></span> 浏览类别
        </div>
    </div>

    <div class="tpl-block">
                    <form action="/admin/goods" method='get'  class="form-horizontal" >
        	               <div class="col-xs-3">
                                    <input type="text" name='search'  class="form-control" placeholder="搜索商品名..." >
                           </div>
        	                <button class='btn btn-success'>搜索</button>
                    </form>
        <div class="am-g">
            <div class="am-u-sm-12">
                    <table class="am-table  am-table-hover table-main am-table-bordered" >
                        <thead>
                            <tr>
                                <th class="table-id">ID</th>
                                <th class="table-type">分类</th>
                                <th class="table-type">商品名称</th>
                                <th class="table-author am-hide-sm-only">生产厂家</th>
                                <th class="table-date am-hide-sm-only">库存</th>
                                <th class="table-date am-hide-sm-only">销量</th>
                                <th class="table-date am-hide-sm-only">价格</th>
                                <th class="table-date am-hide-sm-only">文字详情</th>
                                <th class="table-date am-hide-sm-only" >商品描述</th>
                                <th class="table-date am-hide-sm-only">添加时间</th>
                                <th class="table-date am-hide-sm-only">状态</th>
                                <th class="table-set">操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $k => $v)
                            	<tr>
                                    <td  title="{{$v->id}}">{{$v->id}}</td>
                                    <td  title="{{$v->tid}}">{{$v->tid}}</td>
                                    <td  title="{{$v->gname}}">{{$v->gname}}</td>
                                    <td  title="{{$v->company}}">{{$v->company}}</td>
                                    <td  title="{{$v->stock}}">{{$v->stock}}</td>
                                    <td  title="{{$v->salecnt}}">{{$v->salecnt}}</td>
                                    <td  title="{{$v->price}}">{{$v->price}}</td>
                                    <td  title="{{$v->gdesc}}">{{$v->gdesc}}</td>
                                    <td  title="{{$v->content}}">{{$v->content}}</td>
                                    <td title='{{date('Y-m-d H:i:s',$v->addtime)}}''>{{date('Y-m-d H:i:s',$v->addtime)}}</td>
                                    @if($v->status == 1)
                                    <td >上架</td>
                                    @else
                                    <td >下架</td>
                                    @endif

                                    <th>
                                       <a href="/admin/goods/{{$v->id}}/edit" class=" btn btn-info btn-xs">修改</a>
                                    <form action="/admin/goods/{{$v->id}}" method="post" style='display:inline'>
                                        {{csrf_field()}}

                                        {{method_field('DELETE')}}
                                        <button class="btn btn-warning btn-xs">删除</button>
                                    </form>
                                    </th>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                  

                    <hr>

                
                 {{  $data->appends($arr)->links() }}

            </div>

           
        </div>
    </div>
</div>
@endsection

@section('js')
<script type="text/javascript">
    
    /*setTimeout(function(){

        $('.mws-form-message').remove();

    },3000)*/

    $('.mws-form-message ').fadeOut(2000);

</script>
@endsection