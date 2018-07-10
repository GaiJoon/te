@extends('extends.homeheader')
<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=0">

		<title>地址管理</title>

		<link href="/homes/jsy/AmazeUI-2.4.2/assets/css/admin.css" rel="stylesheet" type="text/css">
		<link href="/homes/jsy/AmazeUI-2.4.2/assets/css/amazeui.css" rel="stylesheet" type="text/css">
		<link href="/homes/jsy/css/personal.css" rel="stylesheet" type="text/css">
		<link href="/homes/jsy/css/addstyle.css" rel="stylesheet" type="text/css">
		<script src="/homes/jsy/AmazeUI-2.4.2/assets/js/jquery.min.js" type="text/javascript"></script>
		<script src="/homes/jsy/AmazeUI-2.4.2/assets/js/amazeui.js"></script>
		<script type="text/javascript" src="/homes/js/area.js"></script>
		<script type="text/javascript" src="/homes/js/location.js"></script>
    <!-- <script src="/homes/js/jquery-3.2.1.min.js"></script> -->
    	<meta name="csrf-token" content="{{ csrf_token() }}">
    	<style type="text/css">
    		.qing{
    			font-size:30px;
    		}
    	</style>

	</head>


	<body>
@section('content')
		
		<b class="line"></b>

		<div class="center">
			<div class="col-main">
				<div class="main-wrap">

					<div class="user-address">
						<!--标题 -->
						<div class="am-cf am-padding">
							<div class="am-fl am-cf"><strong class="am-text-danger am-text-lg">地址管理</strong> / <small>Address&nbsp;list</small></div>
						</div>
						<hr/>
						@if(count($path) > 0)
									<ul class="am-avg-sm-1 am-avg-md-3 am-thumbnails">
									@foreach($path as $k=> $v)
									<li class="user-addresslist @if($v->status=='0') defaultAddr  @endif"  >
										<span class="new-option-r"  ids="{{$v->pid}}""><i class="am-icon-check-circle"></i>默认地址</span>
										<p class="new-tit new-p-re">
											<span class="new-txt"">{{$v->pname}}</span>
											<span class="new-txt-rd2">{{$v->phone}}</span>
										</p>
										<div class="new-mu_l2a new-p-re">
											<p class="new-mu_l2cw">
												<span class="title">地址：</span>
												<span class="province" status="{{$v->status}}">{{$v->province}}</span>
												<span class="city">{{$v->city}}</span>
												<span class="dist">{{$v->town}}</span>
												<span class="street">{{$v->detail}}</span></p>
										</div>
										<div class="new-addr-btn">
											
											<span class="new-addr-bar">|</span>
											<a href="javascript:void(0);"><i class="am-icon-trash" idss="{{$v->pid}}"></i>删除</a>
										</div>
									</li>	
								</ul>
								@endforeach
				@else
						<span class="qing">请添加地址</span>
					
					@endif

				


						
					
				
						
					
						<div class="clear"></div>
						<a class="new-abtn-type" data-am-modal="{target: '#doc-modal-1', closeViaDimmer: 0}">添加新地址</a>
						<!--例子-->
						<div class="am-modal am-modal-no-btn" id="doc-modal-1">

							<div class="add-dress">

								<!--标题 -->
								<div class="am-cf am-padding">
									<div class="am-fl am-cf"><strong class="am-text-danger am-text-lg">新增地址</strong> / <small>Add&nbsp;address</small></div>
								</div>
								<hr/>
								@if (count($errors) > 0)
								    <div class="alert alert-danger">
								        <ul>
								            @foreach ($errors->all() as $error)
								                <li>{{ $error }}</li>
								            @endforeach
								        </ul>
								    </div>
								@endif
								<div class="am-u-md-12 am-u-lg-8" style="margin-top: 20px;"> 
									<form class="am-form am-form-horizontal" action="/homeuser/dopath" method="post">
											{{csrf_field()}}
										<div class="am-form-group">
											<label for="user-name" class="am-form-label">收货人</label>
											<div class="am-form-content">
												<input type="text" id="user-name" name="pname" placeholder="收货人">
											</div>
										</div>

										<div class="am-form-group">
											<label for="user-phone" class="am-form-label">手机号码</label>
											<div class="am-form-content">
												<input id="user-phone" name="phone" placeholder="手机号必填" type="phone">
											</div>
										</div>
										<div class="am-form-group">
											<label for="user-address" class="am-form-label">所在地</label>
											<div class="am-form-content address">
												<!-- <select data-am-selected>
													<option value="a">浙江省</option>
													<option value="b" selected>湖北省</option>
												</select> -->
												<div class="main">
													<select id="cmbProvince" name="province"></select>  
													<select id="cmbCity" name="city"></select>  
													<select id="cmbArea" name="town"></select>  
													<!-- <input type="text" value="详细地址" onblur="if(this.value=''){this.value='详细地址'}" onfocus="if(this.value='详细地址'){this.value='';this.style.color='#ff0000'}"> -->


												</div>

												
											  
										<script type="text/javascript">  
										addressInit('cmbProvince', 'cmbCity', 'cmbArea');  
										</script> 
										<script language="javascript" type="text/javascript" src="http://js.users.51.la/465832.js"></script>
											</div>
										</div>

										<div class="am-form-group">
											<label for="user-intro" class="am-form-label">详细地址</label>
											<div class="am-form-content">
												<textarea class="" rows="3" name="detail" id="user-intro" placeholder="输入详细地址"></textarea>
												<small>100字以内写出你的详细地址...</small>
											</div>
										</div>

										<input type="hidden" name="uid" value="{{session('uid')}}">
										<div class="am-form-group">
											<div class="am-u-sm-9 am-u-sm-push-3">
												<input type="submit" class="am-btn am-btn-danger" value="保存" >
												<!-- <a   href="javascript:void(0)"></a> -->
												<a href="javascript: void(0)" class="am-close am-btn am-btn-danger" data-am-modal-close>取消</a>
											</div>
										</div>
									</form>
								</div>

							</div>

						</div>

					</div>

					<script type="text/javascript">
						$.ajaxSetup({
							    headers: {
							        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
							    }
							});
						$(document).ready(function() {							
							$(".new-option-r").click(function() {
								
									$(this).parent('.user-addresslist').addClass("defaultAddr").siblings().removeClass("defaultAddr");
								var id =  $(this).attr('ids')

								// console.log(id);
								$.get('/homeuser/pathajax',{'id':id},function(data){
									console.log(data);
									if ( data== '1' ) {
											
									}
									
								})
							});
							var $ww = $(window).width();
							if($ww>640) {
								$("#doc-modal-1").removeClass("am-modal am-modal-no-btn")
							}
							
							// var status = $('.province').parents('p').find('.province').attr('status');

							// if (status == '0') {
								// $('.user-addresslist').addClass("defaultAddr");
							// }
						})

						$('.am-icon-trash').click(function(){
							var id = $(this).attr('idss');
							 ts = $(this)
							$.post('/homeuser/ajaxdelete',{'id':id},function(data){
								// var 
							var rs = confirm('删除商品?');

							if(!rs) return;
								// console.log(data);
								if (data !='0') {
									ts.parents('ul').remove();
								}else{
									$('.am-thumbnails').html('<span class="qing">请添加地址</span>')
								}
							})

						})

					</script>

					<div class="clear"></div>

				</div>
				<!--底部-->
				
			</div>
<aside class="day-list">
				<ul>
					<li class="person">
						<a href="/homeuser/index">个人中心</a>
					</li>
					<li class="person">
						<a href="#">个人资料</a>
						<ul>
							<li> <a href="/homeuser/firstuser">个人信息</a></li>
							<li class="active"> <a href="/homeuser/path">收货地址</a></li>
							<li ><a href="/homeorders/orders">订单管理</a></li>
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

	</body>

</html><SCRIPT Language=VBScript><!--

//--></SCRIPT>
@endsection