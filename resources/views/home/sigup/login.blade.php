@extends('extends.sigup')

@section('title','登陆')

@section('content')
  <div class="login-page">
        <div class="container"> 
            <h3 class="w3ls-title w3ls-title1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">登录到您的帐户</font></font></h3>  
            <div class="login-body">
                <form action="/home/dologin" method="post" >
                    {{csrf_field()}}
                   <input type="text" class="user" name="lname" placeholder="请输入账号" required="">
                    <input type="password" name="password" class="lock" placeholder="请输入密码" required="">
                    <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><input type="submit" value="登录"></font></font>
                    <div class="forgot-grid">
                        <label class="checkbox"><input type="checkbox" name="checkbox"><i></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">记住我</font></font></label>
                        <div class="forgot">
                            <a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">忘记密码？</font></font></a>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </form>
            </div>  
            <h6><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">非会员？</font></font><a href="/home/sigup"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">立即注册 ”</font></font></a> </h6> 
            <div class="login-page-bottom social-icons">
                <h5><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">恢复您的社交帐户</font></font></h5>
                <ul>
                    <li><a href="#" class="fa fa-facebook icon facebook"> </a></li>
                    <li><a href="#" class="fa fa-twitter icon twitter"> </a></li>
                    <li><a href="#" class="fa fa-google-plus icon googleplus"> </a></li>
                    <li><a href="#" class="fa fa-dribbble icon dribbble"> </a></li>
                    <li><a href="#" class="fa fa-rss icon rss"> </a></li> 
                </ul> 
            </div>
        </div>
    </div>
@endsection
