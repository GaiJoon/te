<!DOCTYPE html>
<html>
    
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="Pragma" content="no-cache">
        <meta http-equiv="Cache-Control" content="no-cache">
        <meta http-equiv="Expires" content="0">
        <title>
            后台管理
        </title>
        <link href="/css/login.css" rel="stylesheet" type="text/css" />
    </head>
    
    <body>
        <div class="login_box">
            <div class="login_l_img">
                <img src="/picture/login-img.png" />
            </div>
            <div class="login">
                <div class="login_logo">
                    <a href="#">
                        <img src="/picture/login_logo.png" />
                    </a>
                </div>
                <div class="login_name">
                    <p>
                        后台管理系统
                    </p>
                </div>
                <form method="post" action="/admin/dologin">
                {{csrf_field()}}
                    <input name="username" type="text" value="用户名" onfocus="this.value=''"
                    onblur="if(this.value==''){this.value='用户名'}">
                    <span id="password_text" onclick="this.style.display='none';document.getElementById('password').style.display='block';document.getElementById('password').focus().select();">
                        密码
                    </span>
                    <input name="password" type="password" id="password" style="display:none;"
                    onblur="if(this.value==''){document.getElementById('password_text').style.display='block';this.style.display='none'};"
                    />
                   <div class="am-form-group">
                        <input type="password" name="code" class="" placeholder="输入验证码"style="width:170px">
                        <img src="/admin/captcha" alt="" style="width:160px height:50px" onclick='this.src=this.src+="?1"'>
                    </div>
                    <input value="登录" style="width:100%;" type="submit">
                </form>
            </div>
        </div>
        <div style="text-align:center;">
        </div>
    </body>

</html>
