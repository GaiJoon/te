@extends('extends.admin')

@section('title','用户添加')


@section('content')

<div class="tpl-portlet-components">
                <div class="portlet-title">
                    <div class="caption font-green bold">
                        <span class="am-icon-code"></span> 添加用户
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
                            <form class="am-form am-form-horizontal" action="/admin/users" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                                <div class="am-form-group">
                                    <label for="user-name" class="am-u-sm-3 am-form-label">姓名 / Name</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" id="user-name" name="username">
                                    </div>
                                </div>
                                 <div class="am-form-group">
                                    <label for="user-name" class="am-u-sm-3 am-form-label">头像</label>
                                    <div class="am-u-sm-9">
                                        <input type="file" id="user-name" name="img">
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-QQ" class="am-u-sm-3 am-form-label">密码</label>
                                    <div class="am-u-sm-9">
                                        <input type="password" pattern="[0-9]*" id="user-QQ" name="password">
                                    </div>
                                </div>
                                 <div class="am-form-group">
                                    <label for="user-QQ" class="am-u-sm-3 am-form-label">确认密码</label>
                                    <div class="am-u-sm-9">
                                        <input type="password" pattern="[0-9]*" id="user-QQ" name="upas">
                                    </div>
                                </div>

                              <div class="am-form-group">
                                    <label for="user-QQ" class="am-u-sm-3 am-form-label">权限</label>
                                    <div class="am-u-sm-9">
                                         <select class="large" name="auth">
                                            <option value="3"></option>
                                            <option value="0" checked='checked'>后台管理员</option>
                                            <option value="1">普通用户</option>
                                        </select>
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