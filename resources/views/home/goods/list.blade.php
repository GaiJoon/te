	@extends('extends.home')
@section('title',$title)
@section('content')
                    

	<!-- products -->
	<div class="products">	 
		<div class="container">
			<div class="col-md-9 product-w3ls-right" style="width: 1130px;">
				<!-- breadcrumbs --> 
				<ol class="breadcrumb breadcrumb1">
					<li><a href="/home/index">返回首页</a></li>
					<li class="active">商品</li>
				</ol> 
				<div class="clearfix"> </div>
				<!-- //breadcrumbs -->
				<div class="product-top">
					<h4>新品上架</h4>
					<div class="clearfix"> </div>
				</div>
				<div class="products-row">
					@foreach($goods as $k)
					
					<?php 
						$img = $k->gimg[0];
					 ?>
					 
					<div class="col-md-3 product-grids">
						
						<div class="agile-products " style="height: 370px;">
							<a href="/home/details/{{$k->id}}"><img src="{{$img->gpic}}" class="img-responsive" alt="img"></a>
							<div class="agile-product-text">              
								<h5><a href="single.html">{{$k->gname}}</a></h5> 
								<h6><del>{{$k->price}}</del> ${{$k->cheap}}</h6> 
								<form action="#" method="post">
									<input type="hidden" name="gname" value="{{$k->gname}}" />
									<input type="hidden" name="img" value="{{$img->gpic}}" /> 
									<input type="hidden" name="price" value="{{$k->price}}" /> 
									<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i>添加到购物车</button>
								</form>
							</div>
						</div>

					<!-- <div class="clearfix"> </div> -->

					</div> 
					@endforeach
					<div class="clearfix"> </div>

				</div>
				<!-- add-products --> 
				<div class="w3ls-add-grids w3agile-add-products">
					<a href="#"> 
						<h4>TOP 10 TRENDS FOR YOU FLAT <span>20%</span> OFF</h4>
						<h6>Shop now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></h6>
					</a>
				</div> 
				<!-- //add-products -->
			</div>
			<div class="clearfix"> </div>
			<!-- recommendations -->
			<div class="recommend">
				<h3 class="w3ls-title">促销商品 </h3> 
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
		</div>
	</div>
	<!--//products-->  
@endsection