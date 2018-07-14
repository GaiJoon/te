@extends('extends.sigup')

@section('title','注册')

@section('content')
    <div class="login-page">
        <div class="container"> 
            <h3 class="w3ls-title w3ls-title1">注册</h3> 
              @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            <div class="login-body">
                <form action="/home/dosigup" method="post"> 
                    {{csrf_field()}}
                    <!-- <input type="text" class="user" name="mname" placeholder="Enter your Name" required="" value="昵称"> -->
                    <input type="text" class="user" name="lname" placeholder="账号" required="" >
                    <input type="text" class="user" name="phone" placeholder="手机号" required="" >
                    <input type="password" name="password" class="lock" placeholder="密码" required="" >
                    <input type="password" name="upas" class="lock" placeholder="确认密码" required="">
                    <div class="form-group">
                        <label class="sr-only" for="exampleInputEmail3">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail3" placeholder="邮箱" name="email">
                  </div>
                 
                    <input type="submit" value="提交 ">
                     <h6><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">已有账号</font></font><a href="/home/login"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">立即登陆 ”</font></font></a> </h6> 
                    <div class="checkbox">
                   
                  </div>
                </form>
            </div>  
           
        </div>
    </div>
@endsection
@section('js')
<script type="text/javascript">
 
        $('.alert').fadeOut(5000);
</script>
@endsection