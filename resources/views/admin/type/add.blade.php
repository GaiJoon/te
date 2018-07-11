@extends('extends.admin')

@section('title', $title)



@section('content')

    
	<div class="tpl-portlet-components">
                <div class="portlet-title">
                    <div class="caption font-green bold">
                        <span class="am-icon-code"></span> 添加分类
                    </div>
                   

                </div>
                <div class="tpl-block ">

                    @if (count($errors) > 0)
                        <div class="mws-form-message error">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li style='font-size:16px;list-style:none'>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                
                    <div class="am-g tpl-amazeui-form">
                        <div class="am-u-sm-12 am-u-md-9">
                            <form class="am-form am-form-horizontal" action="/admin/type" method="post">
                                <div class="am-form-group">
                                    <label for="user-name" class="am-u-sm-3 am-form-label">父级分类</label>
                                    <div class="am-u-sm-9">
                                        <select name="pid">
                                        	<option value="0">顶级分类</option>
												@foreach ($res as $k=>$v)

														<?php 
															$n = substr_count($v->path,',')-1;
														?>
														<option  value="{{$v->tid}}">{{str_repeat('&nbsp;',$n*7)}}|--{{$v->tname}}</option>

												@endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-email" class="am-u-sm-3 am-form-label">类别名称</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" name="tname" placeholder="请输入类别">
                                    </div>
                                </div>


                                <div class="am-form-group">
                                    <div class="am-u-sm-9 am-u-sm-push-3">
                                        <button type="submit" class="am-btn am-btn-primary">提交</button>
                                    </div>
                                </div>
                                {{csrf_field()}}
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

    $('.mws-form-message').fadeOut(2000);

</script>
@endsection
