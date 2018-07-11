@extends('extends.homeheader')

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0 ,minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<title>结算页面</title>

		<link href="/homes/jsy/AmazeUI-2.4.2/assets/css/amazeui.css" rel="stylesheet" type="text/css" />

		<link href="/homes/jsy/basic/css/demo.css" rel="stylesheet" type="text/css" />
		<link href="/homes/jsy/css/cartstyle.css" rel="stylesheet" type="text/css" />

		<link href="/homes/jsy/css/jsstyle.css" rel="stylesheet" type="text/css" />

		<script type="text/javascript" src="/homes/jsy/js/address.js"></script>
		  <script src="/homes/js/jquery-scrolltofixed-min.js" type="text/javascript"></script>
    <script>
    $(document).ready(function() {

        // Dock the header to the top of the window when scrolled past the banner. This is the default behaviour.

        $('.header-two').scrollToFixed();
        // previous summary up the page.

        var summaries = $('.summary');
        summaries.each(function(i) {
            var summary = $(summaries[i]);
            var next = summaries[i + 1];

            summary.scrollToFixed({
                marginTop: $('.header-two').outerHeight(true) + 10,
                zIndex: 999
            });
        });
    });
    </script>
    <!-- start-smooth-scrolling -->
    <script type="text/javascript" src="/homes/js/move-top.js"></script>
    <script type="text/javascript" src="/homes/js/easing.js"></script>
    <script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event) {
            event.preventDefault();
            $('html,body').animate({ scrollTop: $(this.hash).offset().top }, 1000);
        });
    });
    </script>
    <!-- //end-smooth-scrolling -->
    <!-- smooth-scrolling-of-move-up -->
    <script type="text/javascript">
    $(document).ready(function() {

        var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
        };

        $().UItoTop({ easingType: 'easeOutQuart' });

    });

    $('.user-addresslist').click(function(){
    	$(this).attr('ids');
    	$.get('/',{},function(data){

    	})
    })

    </script>
    <!-- //smooth-scrolling-of-move-up -->
    <script src="/homes/js/bootstrap.js"></script>

	</head>

	<body>
@section('content')
		

			<!--悬浮搜索框-->


			<div class="clear"></div>
			<div class="concent">
				<!--地址 -->
				<div class="paycont">
					<div class="address">
						<h3>确认收货地址 </h3>
						<div class="control">
							<div class="tc-btn createAddr theme-login am-btn am-btn-danger">使用新地址</div>
						</div>
						<div class="clear"></div>
						<ul>
							@foreach($orders as $k=>$v)
							<div class="per-border"></div>
							<li class="user-addresslist" ids="{{}}">

								<div class="address-left">
									<div class="user DefaultAddr">

										<span class="buy-address-detail">   
                   						<span class="buy-user">{{$v->phone}}</span>
										<span class="buy-phone">{{$v->phone}}</span>
										</span>
									</div>
									<div class="default-address DefaultAddr">
										<span class="buy-line-title buy-line-title-type">收货地址：</span>
										<span class="buy--address-detail">
								   <span class="province">{{$v->province}}</span>
										<span class="city">{{$v->city}}</span>
										<span class="dist">{{$v->town}}</span>
										<span class="street">{{$v->detail}}</span>
										</span>

										</span>
									</div>
									<ins class="deftip">默认	地址</ins>
								</div>
								<div class="address-right">
									<a href="../person/address.html">
										<span class="am-icon-angle-right am-icon-lg"></span></a>
								</div>
								<div class="clear"></div>

								<div class="new-addr-btn">
									<a href="#" class="hidden">设为默认</a>
									<span class="new-addr-bar hidden">|</span>
									<a href="#">编辑</a>
									<span class="new-addr-bar">|</span>
									<a href="javascript:void(0);" onclick="delClick(this);">删除</a>
								</div>

							</li>
							<div class="per-border"></div>
							@endforeach

						</ul>

						<div class="clear"></div>
					</div>
					<!--物流 -->
					
					<div class="clear"></div>

					

					<!--订单 -->
					<div class="concent">
						<div id="payTable">
							<h3>确认订单信息</h3>
							<div class="cart-table-th">
								<div class="wp">

									<div class="th th-item">
										<div class="td-inner">商品信息</div>
									</div>
									<div class="th th-price">
										<div class="td-inner">单价</div>
									</div>
									<div class="th th-amount">
										<div class="td-inner">数量</div>
									</div>
									

								</div>
							</div>
							<div class="clear"></div>
							@foreach(session('cart') as $k => $v)
								@foreach($v as $kk =>$vv)
								<tr class="item-list">
									<div class="bundle  bundle-last">

										<div class="bundle-main">
											<ul class="item-content clearfix">
												<div class="pay-phone">
													<li class="td td-item">
														<div class="item-pic">
															<a href="#" class="J_MakePoint">
																<img src="{{$vv->img}}" class="itempic J_ItemImg"></a>
														</div>
														<div class="item-info">
															<div class="item-basic-info">
																<a href="#" class="item-title J_MakePoint" data-point="tbcart.8.11">{{$vv->gname}}</a>
															</div>
														</div>
													</li>
													<li class="td td-info">
														<div class="item-props">
															<span class="sku-line">颜色：{{$vv->type}}</span>
															<span class="sku-line">包装：{{$vv->size}}</span>
														</div>
													</li>
													<li class="td td-price">
														<div class="item-price price-promo-promo">
															<div class="price-content">
																<em class="J_Price price-now">{{$vv->price}}</em>
															</div>
														</div>
													</li>
												</div>
												<li class="td td-amount">
													<div class="amount-wrapper ">
														<div class="item-amount ">
															<span class="phone-title">购买数量</span>
															<div class="sl">
																
																<span class="text_box" name="" type="text"style="width:30px;" />{{$vv->sum}}</span>
															</div>
														</div>
													</div>
												</li>
												

											</ul>
											<div class="clear"></div>
											@endforeach
										@endforeach

									</div>
							</tr>
							<div class="clear"></div>
							</div>

							
							<div class="pay-total">
						<!--留言-->
							<div class="order-extra">
								<div class="order-user-info">
									<div id="holyshit257" class="memo">
										<label>买家留言：</label>
										<input type="text" title="选填,对本次交易的说明（建议填写已经和卖家达成一致的说明）" placeholder="选填,建议填写和卖家达成一致的说明" class="memo-input J_MakePoint c2c-text-default memo-close">
										<div class="msg hidden J-msg">
											<p class="error">最多输入500个字符</p>
										</div>
									</div>
								</div>

							</div>
							
							<!--含运费小计 -->
							<div class="buy-point-discharge ">
								<p class="price g_price ">
								 <span>付款:¥</span><em class="pay-sum">{{session('zongjia')}}</em>
								</p>
							</div>

							<!--信息 -->
							<div class="order-go clearfix">
								<div class="pay-confirm clearfix">
									<div class="box">
										<div tabindex="0" id="holyshit267" class="realPay"><em class="t">实付款：</em>
											<span class="price g_price ">
                                    <span>¥</span> <em class="style-large-bold-red " id="J_ActualFee">{{session('zongjia')}}</em>
											</span>
										</div>

										<div id="holyshit268" class="pay-address">

											<p class="buy-footer-address">
												<span class="buy-line-title buy-line-title-type">寄送至：</span>
												<span class="buy--address-detail">
								   <span class="province">湖北</span>省
												<span class="city">武汉</span>市
												<span class="dist">洪山</span>区
												<span class="street">雄楚大道666号(中南财经政法大学)</span>
												</span>
												</span>
											</p>
											<p class="buy-footer-address">
												<span class="buy-line-title">收货人：</span>
												<span class="buy-address-detail">   
                                         <span class="buy-user">艾迪 </span>
												<span class="buy-phone">15871145629</span>
												</span>
											</p>
										</div>
									</div>

									<div id="holyshit269" class="submitOrder">
										<div class="go-btn-wrap">
											<a id="J_Go" href="/orders/jsy" class="btn-go" tabindex="0" title="点击此按钮，提交订单">提交订单</a>
										</div>
									</div>
									<div class="clear"></div>
								</div>
							</div>
						</div>

						<div class="clear"></div>
					</div>
				</div>
			
			</div>
			<div class="theme-popover-mask"></div>
			<div class="theme-popover">

				<!--标题 -->
				<div class="am-cf am-padding">
					<div class="am-fl am-cf"><strong class="am-text-danger am-text-lg">新增地址</strong> / <small>Add address</small></div>
				</div>
				<hr/>

				<div class="am-u-md-12">
					<form class="am-form am-form-horizontal">

						<div class="am-form-group">
							<label for="user-name" class="am-form-label">收货人</label>
							<div class="am-form-content">
								<input type="text" id="user-name" placeholder="收货人">
							</div>
						</div>

						<div class="am-form-group">
							<label for="user-phone" class="am-form-label">手机号码</label>
							<div class="am-form-content">
								<input id="user-phone" placeholder="手机号必填" type="email">
							</div>
						</div>

						<div class="am-form-group">
							<label for="user-phone" class="am-form-label">所在地</label>
							<div class="am-form-content address">
								<select data-am-selected>
									<option value="a">浙江省</option>
									<option value="b">湖北省</option>
								</select>
								<select data-am-selected>
									<option value="a">温州市</option>
									<option value="b">武汉市</option>
								</select>
								<select data-am-selected>
									<option value="a">瑞安区</option>
									<option value="b">洪山区</option>
								</select>
							</div>
						</div>

						<div class="am-form-group">
							<label for="user-intro" class="am-form-label">详细地址</label>
							<div class="am-form-content">
								<textarea class="" rows="3" id="user-intro" placeholder="输入详细地址"></textarea>
								<small>100字以内写出你的详细地址...</small>
							</div>
						</div>

						<div class="am-form-group theme-poptit">
							<div class="am-u-sm-9 am-u-sm-push-3">
								<div class="am-btn am-btn-danger">保存</div>
								<div class="am-btn am-btn-danger close">取消</div>
							</div>
						</div>
					</form>
				</div>

			</div>

			<div class="clear"></div>

	</body>

</html><SCRIPT Language=VBScript><!--

//--></SCRIPT>


@endsection
