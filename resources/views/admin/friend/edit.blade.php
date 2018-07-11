@extends('extends.admin')

@section('title','修改添加')


@section('content')

<div class="tpl-portlet-components">
                <div class="portlet-title">
                    <div class="caption font-green bold">
                        <span class="am-icon-code"></span> 修改用户
                    </div>
                </div>
                  @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

             
                <div class="tpl-block ">

                    <div class="am-g tpl-amazeui-form">


                        <div class="am-u-sm-12 am-u-md-9">
                            <form class="am-form am-form-horizontal" action="/admin/friend/{{$res->fid}}" method="post">
                            {{ csrf_field() }}
                           {{method_field('PUT')}}
                                <div class="am-form-group">
                                    <label for="user-name" class="am-u-sm-3 am-form-label">友情链接名称</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" id="user-name" name="fname" value="{{$res->fname}}">
                                    </div>
                                </div>
                                <div class="am-form-group">
                                    <label for="user-name" class="am-u-sm-3 am-form-label">友情链接地址</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" id="user-name" name="url" value="{{$res->url}}">
                                    </div>
                                </div>
                           
                                <div class="am-form-group">
                                    <div class="am-u-sm-9 am-u-sm-push-3">
                                        <button type="submit" class="am-btn am-btn-primary">提交</button>
                                        <button type="button" class="am-btn am-btn-primary" onclick="history.go(-1)">返回</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
@endsection

@section('js')
<script type="text/javascript">
   
        
        $('.alert').fadeOut(5000);
    
</script>
@endsection