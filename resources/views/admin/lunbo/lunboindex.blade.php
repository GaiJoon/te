@extends('extends.admin')

@section('title','浏览轮播')

@section('content')

<div class="tpl-portlet-components">
                <div class="portlet-title">
                    <div class="caption font-green bold">
                        <span class="am-icon-code"></span> 列表
                    </div>
                    <div class="tpl-portlet-input tpl-fz-ml">
                        <div class="portlet-input input-small input-inline">
                            <div class="input-icon right">
                                <i class="am-icon-search"></i>
                                <input type="text" class="form-control form-control-solid" placeholder="搜索..."> </div>
                        </div>
                    </div>


                </div>
                <div class="tpl-block">
                    
                    <div class="am-g">
                        <div class="am-u-sm-12">
                                                           <table class="am-table am-table-striped am-table-hover table-main">
                                    <thead>
                                        <tr>
                                            <th class="table-id">ID</th>
                                            <th class="table-title">标题</th>
                                            <th class="table-date am-hide-sm-only">修改日期</th>
                                            <th class="table-date am-hide-sm-only">图片</th>
                                            <th class="table-title">状态</th>
                                            <th class="table-set">操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	@foreach($lunbo as $k => $v)
                                        <tr>
                                            <td>{{$v['lid']}}</td>
                                            <td>{{$v['title']}}</td>
                                            <td>{{$v['addtime']}}</td>
                                            
                                            <td>
                                           	@foreach($v['url'] as $kk => $vv)
                                            	
                                            		<img src="{{$vv}}" style="width: 40px;">
                                          
                                            @endforeach
                                             </td>
                                          
                                            <td>
                                            	@if ( $v['status'] == 1)
												    关闭
												@elseif ($v['status']== 2)
												    开启
												@endif
                                        	</td>
                                            <td>
                                                <div class="am-btn-toolbar">
                                                    <div class="am-btn-group am-btn-group-xs">
                                                        <button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"><a href="/admin/lunbo/{{$v['lid']}}/edit">修改</a></span> </button>
                                                        @if($v['status'] == 1)
                                                        <button class="am-btn am-btn-default am-btn-xs am-hide-sm-only"><span class="am-icon-copy"><a id="two" href="/admin/lunbo/shangjia/{{$v['lid']}}">开启</a></span></button>

                                                        @elseif($v['status'] ==2)
                                                         <button class="am-btn am-btn-default am-btn-xs am-hide-sm-only"><span class="am-icon-copy"><a id="one" href="/admin/lunbo/xiajia/{{$v['lid']}}">关闭</a></span></button>				
                                                         @endif
                                                         <form method="post" action="/admin/lunbo/{{$v['lid']}}" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only">
                                                        		{{csrf_field()}}
                                                        		{{ method_field('DELETE') }}
                                                        <button  type="submit"><span class="am-icon-trash-o">删除</span></button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="am-cf">

                                    <div class="am-fr">
                                         {!! $lunbo->render() !!}
                                    </div>
                                </div>
                                <hr>

                        </div>

                    </div>
                </div>
                <div class="tpl-alert"></div>
            </div>
@endsection
@section('js')
<script type="text/javascript">
    
    /*setTimeout(function(){

        $('.mws-form-message').remove();

    },3000)*/

    $('.mws-form-message').fadeOut(2000);
    
    // $('#one').click(function(){
    // 	$.get('/admin/lunbo/shangjia',{$lunbo['lid']},function(data){
    // 		alert(data);
    // 	})
    // })

</script>
@endsection