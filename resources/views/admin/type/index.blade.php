@extends('extends.admin')

@section('title', $title)



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
            <form action="/admin/type" method='get'  class="form-horizontal">
	            
	                <label>
	                    <input type="text" name='search' value="{{$request->search}}" class="form-control" placeholder="搜索类名..." >
	                </label>
	                <button class='btn btn-success'>搜索</button>
            </form>
        <div class="am-g">
            <div class="am-u-sm-12">
                <form class="am-form">
                    <table class="am-table am-table-striped am-table-hover table-main ">
                        <thead>
                            <tr>
                                <th class="table-id">ID</th>
                                <th class="table-type">类别名称</th>
                                <th class="table-author am-hide-sm-only">pid</th>
                                <th class="table-date am-hide-sm-only">path</th>
                                <th class="table-set">操作</th>
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach ($res as $k)
							
                            <tr>
                                <td>{{$k->tid}}</td>
                                <?php 
									$n = substr_count($k->path,',')-1;
								?>

                                <td>{{str_repeat('&nbsp;',$n*10)}}|--{{$k->tname}}</td>
                                <td class="am-hide-sm-only">{{$k->pid}}</td>
                                <td class="am-hide-sm-only">{{$k->path}}</td>
                                <td>
                                   
                                    <a href="/admin/type/{{$k->tid}}/edit" class=" btn btn-info">修改</a>
									<form action="/admin/type/{{$k->tid}}" method="post" style='display:inline'>
										{{csrf_field()}}

                                {{method_field('DELETE')}}
										<button class="btn btn-warning">删除</button>
									</form>
                                </td>
                            </tr>

                           
                           @endforeach
                        </tbody>
                    </table>
                  

                    <hr>

                </form>
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