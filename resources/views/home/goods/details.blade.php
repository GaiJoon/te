
@extends('extends.home')
<script defer src="/homes/js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="/homes/css/flexslider.css" type="text/css" media="screen" />


@section('title',$title)
@section('content')


<script>
	// Can also be used with $(document).ready()
	$(window).load(function() {
	  $('.flexslider').flexslider({
		animation: "slide",
		controlNav: "thumbnails"
	  });
	});
</script>

<script src="/homes/js/imagezoom.js"></script>



	<div class="products">	 
		<div class="container">  
			@foreach($data as $k)
			<div class="single-page">
				<div class="single-page-row" id="detail-21">
					<div class="col-md-6 single-top-left">	
						<div class="flexslider">
							<ul class="slides" ">
								<li data-thumb="{{$k->gimg[0]->gpic}}">
									<div style="width: 358px; height: 434px; border: 1px solid #eee; " class="thumb-image detail_images"> <img src="{{$k->gimg[0]->gpic}}" data-imagezoom="true" width="100%" class="img-responsive" alt=""> </div>
								</li>
								<li data-thumb="{{$k->gimg[1]->gpic}}">
									 <div class="thumb-image" style="width: 358px; height: 434px; border: 1px solid #eee; "> <img  src="{{$k->gimg[1]->gpic}}" data-imagezoom="true" width="100%" class="img-responsive" alt=""> </div>
								</li>
								<li data-thumb="{{$k->gimg[2]->gpic}}" style="width: 358px; height: 434px; border: 1px solid #eee; ">
								   <div class="thumb-image"> <img src="{{$k->gimg[3]->gpic}}" data-imagezoom="true" width="100%" class="img-responsive" alt=""> </div>
								</li> 
							</ul>
						</div>


					
					</div>
					<div class="col-md-6 single-top-right">
						<h3 class="item_name">{{$k->gname}}</h3>
						<div class="single-rating">
							<ul>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li class="rating">20 reviews</li>
								<li><a href="#">Add your review</a></li>
							</ul> 
						</div>
						<div class="single-price">
							<ul> 
								<li>{{$k->price}}</li> 
								<li><span class="w3off">10% OFF</span></li> 
							</ul>	
						</div> 
						<p class="single-price-text">{{$k->gdesc}}</p>
						<form action="#" method="post">

								<input type="button" value="-" class="minus">
								<input type="text" name="quantity" value="1" class="qty" size="3px" data-max="200" style="text-align: center" />
								<input type="button" value="+" class="plus">
							
							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="add" value="1"> 
							<input type="hidden" name="w3ls_item" value="Snow Blower"> 
							<input type="hidden" name="amount" value="540.00"> 
							<button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i>加入购物车</button>
						</form>
					</div>
				   <div class="clearfix"> </div>  
				</div>
				<div class="single-page-icons social-icons"> 
					<ul>
						<li><h4>Share on</h4></li>
						<li><a href="#" class="fa fa-facebook icon facebook"> </a></li>
						<li><a href="#" class="fa fa-twitter icon twitter"> </a></li>
						<li><a href="#" class="fa fa-google-plus icon googleplus"> </a></li>
						<li><a href="#" class="fa fa-dribbble icon dribbble"> </a></li>
						<li><a href="#" class="fa fa-rss icon rss"> </a></li> 
					</ul>
				</div>
			</div> 
			@endforeach
			<!-- recommendations -->
			<div class="recommend">
				<h3 class="w3ls-title">推荐商品</h3> 
				<script>
					$(document).ready(function() { 
						$("#owl-demo5").owlCarousel({
					 
						  autoPlay: 3000, //Set AutoPlay to 3 seconds
					 
						  items :4,
						  itemsDesktop : [640,5],
						  itemsDesktopSmall : [414,4],
						  navigation : true
					 
						});
						
					}); 
				</script>
				<div id="owl-demo5" class="owl-carousel">
					@foreach($res as $k)
                    <?php 
                        $img = $k->gimg[0];
                     ?>
                     <!-- {{dump($img->gpic)}} -->
                    <div class="item">
                        <div class="glry-w3agile-grids agileits" style="height:300px;">
                        	<div class="new-tag"><h6>20% <br> Off</h6></div>
                            <a href="/home/list?id={{$k->tid}}"><img src="{{$img->gpic}}" alt="img"></a>
                            <div class="view-caption agileits-w3layouts" style="">
                                <h4 ><a href="/home/list?id={{$k->tid}}" style="overflow: hidden;
                                    text-overflow: ellipsis;
                                    display: -webkit-box;
                                    -webkit-line-clamp: 3;
                                    -webkit-box-orient: vertical;">{{$k->gname}}</a></h4>
                                <p style="overflow: hidden;
                                text-overflow: ellipsis;
                                display: -webkit-box;
                                -webkit-line-clamp: 2;
                                -webkit-box-orient: vertical;">{{$k->gdesc}}</p>
                                <h5>${{$k->price}}</h5>
                                <form action="" method="post">
                                    <input type="hidden" name="gname" value="{{$k->gname}}" />
                                    <input type="hidden" name="sum" value="1" />
                                    <input type="hidden" name="company" value="{{$k->company}}" />
                                    <input type="hidden" name="price" value="{{$k->price}}" />
                                    <input type="hidden" name="gpic" value="{{$img->gpic}}" />

                                    <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i>添加到购物车</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach
				</div>    
			</div>
			<!-- //recommendations --> 
			<!-- collapse-tabs -->
			<div class="collpse tabs">
				<h3 class="w3ls-title">关于这个产品</h3> 
				<div class="panel-group collpse" id="accordion" role="tablist" aria-multiselectable="true">
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingOne">
							<h4 class="panel-title">
								<a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									<i class="fa fa-file-text-o fa-icon" aria-hidden="true"></i> 产品描述<span class="fa fa-angle-down fa-arrow" aria-hidden="true"></span> <i class="fa fa-angle-up fa-arrow" aria-hidden="true"></i>
								</a>
							</h4>
						</div>
						<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
							<div class="panel-body">{{$data[0]->content}}</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingTwo">
							<h4 class="panel-title">
								<a class="collapsed pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									<i class="fa fa-info-circle fa-icon" aria-hidden="true"></i> 知识产权声明 <span class="fa fa-angle-down fa-arrow" aria-hidden="true"></span> <i class="fa fa-angle-up fa-arrow" aria-hidden="true"></i>
								</a> 
							</h4>
						</div>
						<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
							<div class="panel-body">

							<b>一</b> &nbsp;&nbsp;			本“软件”是由集市开发。“软件”的一切版权等知识产权，以及与“软件”相关的所有信息内容，包括但不限于：文字表述及其组合、图标、图饰、图表、色彩、界面设计、版面框架、有关数据、印刷材料、或电子文档等均受著作权法和国际著作权条约以及其他知识产权法律法规的保护。

							<br><br>
							<b>二</b>&nbsp;   &nbsp;保留权利： 未明示授权的其他一切权利仍归集市所有,用户使用其他权利时须另外取得集市的书面同意。

							<br><br>
							<b>三</b> &nbsp; &nbsp; 集市客户服务热线： 4000-000-0001，欢迎垂询。

							集市版权所有，保留一切解释和修改权利。
							<br><br>
							&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;<font size="4px"><b>集市公司</b>- Collect from</font>    
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingThree">
							<h4 class="panel-title">
								<a class="collapsed pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									<i class="fa fa-check-square-o fa-icon" aria-hidden="true"></i> 全部评论<span class="fa fa-angle-down fa-arrow" aria-hidden="true"></span> <i class="fa fa-angle-up fa-arrow" aria-hidden="true"></i>
								</a>
							</h4>
						</div>
						<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
							<div class="panel-body">
								<div style="height: 500px; overflow-y:scroll;"  >
									<div style="height: 800px"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- //collapse --> 
			<!-- offers-cards --> 
			<div class="w3single-offers offer-bottom"> 
				<div class="col-md-6 offer-bottom-grids">
					<div class="offer-bottom-grids-info2">
						<h4>Special Gift Cards</h4> 
						<h6>More brands, more ways to shop. <br> Check out these ideal gifts!</h6>
					</div>
				</div>
				<div class="col-md-6 offer-bottom-grids">
					<div class="offer-bottom-grids-info">
						<h4>Flat $10 Discount</h4> 
						<h6>The best Shopping Offer <br> On Fashion Store</h6>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<!-- //offers-cards -->
		</div>
	</div>
@endsection

@section('js')

	<script type="text/javascript">
		//加法  运算
		$('.plus').click(function(){

			//获取数量
		var num = $(this).prev().val();

		num++;
		//加完之后让数量发生改变
		$(this).prev().val(num);

		})



		//减法  运算
		$('.minus').click(function(){

			//获取数量
		var minus = $(this).next().val();

		minus--;
		//加完之后让数量发生改变
			if(minus <= 1 ){
				minus = 1;
			}
				$(this).next().val(minus);
			
		})


	</script>
@endsection


