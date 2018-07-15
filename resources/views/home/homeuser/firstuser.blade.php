@extends('extends.homeheader')
<html class="js cssanimations"><head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=0">

<title>个人信息</title>

<link href="/homes/jsy/AmazeUI-2.4.2/assets/css/admin.css" rel="stylesheet" type="text/css">
<link href="/homes/jsy/AmazeUI-2.4.2/assets/css/amazeui.css" rel="stylesheet" type="text/css">
<link href="/homes/jsy/css/infstyle.css" rel="stylesheet" type="text/css">
<script src="/homes/jsy/AmazeUI-2.4.2/assets/js/jquery.min.js" type="text/javascript"></script>
<link href="/homes/jsy/css/personal.css" rel="stylesheet" type="text/css">
<script src="/homes/jsy/AmazeUI-2.4.2/assets/js/amazeui.js" type="text/javascript"></script>
	
</head>

<body>
<!--头 -->
	@section('content')
    
	<!-- <b class="line"></b> -->
<div class="center">
	<div class="col-main">
		<div class="main-wrap">

			<div class="user-info">
				<!--标题 -->
				<div class="am-cf am-padding">
					<div class="am-fl am-cf"><strong class="am-text-danger am-text-lg">个人资料</strong> / <small>Personal&nbsp;information</small></div>
				</div>
				<hr>

				<!--头像 -->
				<div class="user-infoPic" style="height: 157px;">
					<form action="/homeuser/dofirstuser/{{session('message')['uid']}}" method="post" enctype="multipart/form-data">
							{{csrf_field()}}
						<div class="filePic">
							<input type="file" class="inputPic" name="header" id="file" allowexts="gif,jpeg,jpg,png,bmp" accept="image/*"  onchange="imgChange(this);">
							
			<img class="am-circle am-img-thumbnail" id="imghead" @if(session()->has('message')) src="{{session('message')['header']}}" @else src="/homes/jsy/images/getAvatar.do.jpg" @endif alt="">
							
							
							
							<div class="info-btn">
								<input type="button" class="am-btn am-btn-danger" value="修改头像">
							</div>
						</div>

					
					<p class="am-form-help">头像</p>

					<div class="info-m">
						<div><b>用户名：<i>{{session('message')['mname']}}</i></b></div>
						<div class="u-level">
							<span class="rank r2">
					             <s class="vip1"></s><a class="classes" href="#">铜牌会员</a>
				            </span>
						</div>
						
					</div>
				</div>
 <script type="text/javascript">
					     // 选择图片显示
						function imgChange(obj) {
						//获取点击的文本框
						var file =document.getElementById("file");
						// console.log(file);
						var imgUrl =window.URL.createObjectURL(file.files[0]);
						var img =document.getElementById('imghead');
						img.setAttribute('src',imgUrl); // 修改img标签src属性值
						};

                    </script>
				<!--个人信息 -->
				<div class="info-main am-form am-form-horizontal">
				

						<div class="am-form-group">
							<label for="user-name2" class="am-form-label">昵称</label>
							<div class="am-form-content">
								<input type="text" id="user-name2" value="{{session('message')['mname']}}" name="mname" placeholder="nickname">

							</div>
						</div>

						<div class="am-form-group">
							<label for="user-name" class="am-form-label">姓名</label>
							<div class="am-form-content">
								<input type="text" id="user-name2" name="username" placeholder="name" value="{{session('username')}}">

							</div>
						</div>

						<div class="am-form-group">
							<label class="am-form-label">性别</label>
							<div class="am-form-content sex">
								<label class="am-radio-inline">
									<input type="radio" @if(session('message')['sex']==1) checked @endif name="sex" value="1" data-am-ucheck="" class="am-ucheck-radio"><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span> 男
								</label>
								<label class="am-radio-inline">
									<input type="radio" @if(session('message')['sex']==0) checked @endif name="sex" value="0" data-am-ucheck="" class="am-ucheck-radio"><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span> 女
								</label>
								<label class="am-radio-inline">
									<input type="radio" name="sex" value="0" @if(session('message')['sex']==2) checked @endif data-am-ucheck="" class="am-ucheck-radio"><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span> 保密
								</label>
							</div>
						</div>

						<div class="am-form-group">
							<label for="user-birth" class="am-form-label">生日</label>
							<div class="am-form-content birth">
								<input type="date" value="{{session('message')['barthday']}}" name="barthday">
							</div>
					
						</div>
						<div class="am-form-group">
							<label for="user-phone" class="am-form-label">电话</label>
							<div class="am-form-content">
								<input id="user-phone" name="phone" value="{{session('message')['phone']}}" placeholder="telephonenumber" type="tel">

							</div>
						</div>
						<div class="am-form-group">
							<label for="user-email" class="am-form-label">电子邮件</label>
							<div class="am-form-content">
								<input id="user-email" value="{{session('message')['email']}}" name="email" placeholder="Email" type="email">

							</div>
						</div>
						
						<input type="" style="display:none"  name="uid" value="{{session('message')['uid']}}">
						
						<div class="info-btn">
							<input type="submit" class="am-btn am-btn-danger" value="保存修改">
						</div>
					</form>
				</div>

			</div>

		</div>

    </div>

   <aside class="day-list">
				<ul>
					<li class="person">
						<a href="/homeuser/index">个人中心</a>
					</li>
					<li class="person">
						<a href="#">个人资料</a>
						<ul>
							<li class="active"> <a href="/homeuser/firstuser">个人信息</a></li>
							<li> <a href="/homeuser/path">收货地址</a></li>
							<li><a href="/homeorders/orders">订单管理</a></li>
						</ul>
					</li>
					<li class="person">
						<a href="#">我的小窝</a>
						<ul>
							<li> <a href="collection.html">收藏</a></li>
							<li> <a href="foot.html">足迹</a></li>
							<li> <a href="comment.html">评价</a></li>
							<li > <a href="/homeorders/logistics">消息</a></li>
						</ul>
					</li>

				</ul>

			</aside>
</div>



<script language="VBScript"><!--

//--></script></body></html>
		
@endsection