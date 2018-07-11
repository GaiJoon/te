@extends('extends.home')
@section('title','集市')
@section('content')
        <div class="header-three">
            <!-- header-three -->
            <div class="container">
                <div class="menu">
                    <div class="cd-dropdown-wrapper">
                        <a class="cd-dropdown-trigger" href="#0">Store Categories</a>
                        <nav class="cd-dropdown">
                            <a href="#0" class="cd-close">Close</a>
                            <ul class="cd-dropdown-content">
                                <li><a href="/home/list">今日优惠</a></li>
                               
                                @foreach($data as $k)

                                <li class="has-children">
                                    <a href="/home/list/{{$k->id}}">{{$k->tname}}</a>
                                    
                                    <ul class="cd-secondary-dropdown ">
                                        @foreach($k->sub as $kk)

                                        <li class="has-children">
                                            <a href="#">丅丅丅 </a>
                                            <ul class="is-hidden"> 
                                                <li class="">
                                                    <a href="/home/list?id={{$kk->id}}">{{$kk->tname}}</a> 
                                                </li>
                                            </ul>
                                        </li>
                                        @endforeach
                                    </ul>
                                    
                                </li>
                                @endforeach
                                <li><a href="sitemap.html">完整网站目录 </a></li>
                            </ul>
                            <!-- .cd-dropdown-content -->
                        </nav>
                        <!-- .cd-dropdown -->
                    </div>
                    <!-- .cd-dropdown-wrapper -->
                </div>

                <div class="move-text">
                    <div class="marquee"><a href="offers.html">亲亲的 你来了,  看一下新品  留意一下促销!!!<span>这个“价”期，该出手了</span> <span>夏不为例，幸福团购给你爱。</span></a></div>
                    <script type="text/javascript" src="/homes/js/jquery.marquee.min.js"></script>
                    <script>
                    $('.marquee').marquee({ pauseOnHover: true });
                    //@ sourceURL=pen.js
                    </script>
                </div>
            </div>
        </div>
    </div>
    <!-- //header -->
    <!-- banner -->
    <div class="banner">
        <div id="kb" class="carousel kb_elastic animate_text kb_wrapper" data-ride="carousel" data-interval="6000" data-pause="hover">
            <!-- Wrapper-for-Slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <!-- First-Slide -->
                    <img src="/homes/images/5.jpg" alt="" class="img-responsive" />
                    <div class="carousel-caption kb_caption kb_caption_right">
                        <h3 data-animation="animated flipInX">Flat <span>50%</span> Discount</h3>
                        <h4 data-animation="animated flipInX">Hot Offer Today Only</h4>
                    </div>
                </div>
                <div class="item">
                    <!-- Second-Slide -->
                    <img src="/homes/images/8.jpg" alt="" class="img-responsive" />
                    <div class="carousel-caption kb_caption kb_caption_right">
                        <h3 data-animation="animated fadeInDown">Our Latest Fashion Editorials</h3>
                        <h4 data-animation="animated fadeInUp">cupidatat non proident</h4>
                    </div>
                </div>
                <div class="item">
                    <!-- Third-Slide -->
                    <img src="/homes/images/3.jpg" alt="" class="img-responsive" />
                    <div class="carousel-caption kb_caption kb_caption_center">
                        <h3 data-animation="animated fadeInLeft">End Of Season Sale</h3>
                        <h4 data-animation="animated flipInX">cupidatat non proident</h4>
                    </div>
                </div>
            </div>
            <!-- Left-Button -->
            <a class="left carousel-control kb_control_left" href="#kb" role="button" data-slide="prev">
				<span class="fa fa-angle-left kb_icons" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <!-- Right-Button -->
            <a class="right carousel-control kb_control_right" href="#kb" role="button" data-slide="next">
                <span class="fa fa-angle-right kb_icons" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <script src="/homes/js/custom.js"></script>
    </div>
    <!-- //banner -->
    <!-- welcome -->
    <div class="welcome">
        <div class="container">
            <div class="welcome-info">
                <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                    <ul id="myTab" class=" nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab">
							<i class="fa fa-laptop" aria-hidden="true"></i> 
							<h5>Electronics</h5>
						</a></li>
                        <li role="presentation"><a href="#carl" role="tab" id="carl-tab" data-toggle="tab"> 
							<i class="fa fa-female" aria-hidden="true"></i>
							<h5>Fashion</h5>
						</a></li>
                        <li role="presentation"><a href="#james" role="tab" id="james-tab" data-toggle="tab"> 
							<i class="fa fa-gift" aria-hidden="true"></i>
							<h5>Photo & Gifts</h5>
						</a></li>
                        <li role="presentation"><a href="#decor" role="tab" id="decor-tab" data-toggle="tab"> 
							<i class="fa fa-home" aria-hidden="true"></i>
							<h5>Home Decor</h5>
						</a></li>
                        <li role="presentation"><a href="#sports" role="tab" id="sports-tab" data-toggle="tab"> 
							<i class="fa fa-motorcycle" aria-hidden="true"></i>
							<h5>Sports</h5>
						</a></li>
                    </ul>
                    <div class="clearfix"> </div>
                    <h3 class="w3ls-title">发现好货</h3>
                    <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
                            <div class="tabcontent-grids">
                                <div id="owl-demo" class="owl-carousel">
                                    @foreach($goods as $k)
                                    <?php 
                                        $img = $k->gimg[0];
                                     ?>
                                     <!-- {{dump($img->gpic)}} -->
                                    <div class="item">
                                        <div class="glry-w3agile-grids agileits">
                                            <a href="/home/list?id={{$k->id}}"><img src="{{$img->gpic}}" alt="img"></a>
                                            <div class="view-caption agileits-w3layouts">
                                                <h4><a href="products.html">Audio speaker</a></h4>
                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                <h5>$100</h5>
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls_item" value="Audio speaker" />
                                                    <input type="hidden" name="amount" value="200.00" />
                                                    <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="carl" aria-labelledby="carl-tab">
                            <div class="tabcontent-grids">
                                <script>
                                $(document).ready(function() {
                                    $("#owl-demo1").owlCarousel({

                                        autoPlay: 3000, //Set AutoPlay to 3 seconds

                                        items: 4,
                                        itemsDesktop: [640, 5],
                                        itemsDesktopSmall: [414, 4],
                                        navigation: true

                                    });

                                });
                                </script>
                                <div id="owl-demo1" class="owl-carousel">
                                    <div class="item">
                                        <div class="glry-w3agile-grids agileits">
                                            <a href="products1.html"><img src="/homes/images/f1.png" alt="img"></a>
                                            <div class="view-caption agileits-w3layouts">
                                                <h4><a href="products1.html">T Shirt</a></h4>
                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                <h5>$10</h5>
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls_item" value="T Shirt" />
                                                    <input type="hidden" name="amount" value="10.00" />
                                                    <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="glry-w3agile-grids agileits">
                                            <div class="new-tag">
                                                <h6>20% <br> Off</h6></div>
                                            <a href="products1.html"><img src="/homes/images/f2.png" alt="img"></a>
                                            <div class="view-caption agileits-w3layouts">
                                                <h4><a href="products1.html">Women Sandal</a></h4>
                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                <h5>$20</h5>
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls_item" value="Women Sandal" />
                                                    <input type="hidden" name="amount" value="20.00" />
                                                    <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="glry-w3agile-grids agileits">
                                            <a href="products1.html"><img src="/homes/images/f3.png" alt="img"></a>
                                            <div class="view-caption agileits-w3layouts">
                                                <h4><a href="products1.html">Jewellery</a></h4>
                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                <h5>$60</h5>
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls_item" value="Jewellery" />
                                                    <input type="hidden" name="amount" value="60.00" />
                                                    <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="glry-w3agile-grids agileits">
                                            <div class="new-tag">
                                                <h6>New</h6></div>
                                            <a href="products1.html"><img src="/homes/images/f4.png" alt="img"></a>
                                            <div class="view-caption agileits-w3layouts">
                                                <h4><a href="products1.html">Party dress</a></h4>
                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                <h5>$15</h5>
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls_item" value="Party dress" />
                                                    <input type="hidden" name="amount" value="15.00" />
                                                    <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="glry-w3agile-grids agileits">
                                            <a href="products1.html"><img src="/homes/images/f1.png" alt="img"></a>
                                            <div class="view-caption agileits-w3layouts">
                                                <h4><a href="products1.html">T Shirt</a></h4>
                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                <h5>$10</h5>
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls_item" value="T Shirt" />
                                                    <input type="hidden" name="amount" value="10.00" />
                                                    <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="glry-w3agile-grids agileits">
                                            <div class="new-tag">
                                                <h6>20% <br> Off</h6></div>
                                            <a href="products1.html"><img src="/homes/images/f2.png" alt="img"></a>
                                            <div class="view-caption agileits-w3layouts">
                                                <h4><a href="products1.html">Women Sandal</a></h4>
                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                <h5>$20</h5>
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls_item" value="Women Sandal" />
                                                    <input type="hidden" name="amount" value="20.00" />
                                                    <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="glry-w3agile-grids agileits">
                                            <a href="products1.html"><img src="/homes/images/f3.png" alt="img"></a>
                                            <div class="view-caption agileits-w3layouts">
                                                <h4><a href="products1.html">Jewellery</a></h4>
                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                <h5>$60</h5>
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls_item" value="Jewellery" />
                                                    <input type="hidden" name="amount" value="60.00" />
                                                    <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="glry-w3agile-grids agileits">
                                            <div class="new-tag">
                                                <h6>New</h6></div>
                                            <a href="products1.html"><img src="/homes/images/f4.png" alt="img"></a>
                                            <div class="view-caption agileits-w3layouts">
                                                <h4><a href="products1.html">Party dress</a></h4>
                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                <h5>$15</h5>
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls_item" value="Party dress" />
                                                    <input type="hidden" name="amount" value="15.00" />
                                                    <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="james" aria-labelledby="james-tab">
                            <div class="tabcontent-grids">
                                <script>
                                $(document).ready(function() {
                                    $("#owl-demo2").owlCarousel({

                                        autoPlay: 3000, //Set AutoPlay to 3 seconds

                                        items: 4,
                                        itemsDesktop: [640, 5],
                                        itemsDesktopSmall: [414, 4],
                                        navigation: true

                                    });

                                });
                                </script>
                                <div id="owl-demo2" class="owl-carousel">
                                    <div class="item">
                                        <div class="glry-w3agile-grids agileits">
                                            <div class="new-tag">
                                                <h6>New</h6></div>
                                            <a href="products6.html"><img src="/homes/images/p1.png" alt="img"></a>
                                            <div class="view-caption agileits-w3layouts">
                                                <h4><a href="products6.html">Coffee Mug</a></h4>
                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                <h5>$14</h5>
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls_item" value="Coffee Mug" />
                                                    <input type="hidden" name="amount" value="14.00" />
                                                    <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="glry-w3agile-grids agileits">
                                            <div class="new-tag">
                                                <h6>20% <br> Off</h6></div>
                                            <a href="products6.html"><img src="/homes/images/p2.png" alt="img"></a>
                                            <div class="view-caption agileits-w3layouts">
                                                <h4><a href="products6.html">Teddy bear</a></h4>
                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                <h5>$20</h5>
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls_item" value="Teddy bear" />
                                                    <input type="hidden" name="amount" value="20.00" />
                                                    <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="glry-w3agile-grids agileits">
                                            <div class="new-tag">
                                                <h6>Sale</h6></div>
                                            <a href="products6.html"><img src="/homes/images/p3.png" alt="img"></a>
                                            <div class="view-caption agileits-w3layouts">
                                                <h4><a href="products6.html">Chocolates</a></h4>
                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                <h5>$60</h5>
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls_item" value="Chocolates" />
                                                    <input type="hidden" name="amount" value="60.00" />
                                                    <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="glry-w3agile-grids agileits">
                                            <a href="products6.html"><img src="/homes/images/p4.png" alt="img"></a>
                                            <div class="view-caption agileits-w3layouts">
                                                <h4><a href="products6.html">Gift Card</a></h4>
                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                <h5>$22</h5>
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls_item" value="Gift Card" />
                                                    <input type="hidden" name="amount" value="22.00" />
                                                    <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="glry-w3agile-grids agileits">
                                            <div class="new-tag">
                                                <h6>New</h6></div>
                                            <a href="products6.html"><img src="/homes/images/p1.png" alt="img"></a>
                                            <div class="view-caption agileits-w3layouts">
                                                <h4><a href="products6.html">Coffee Mug</a></h4>
                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                <h5>$14</h5>
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls_item" value="Coffee Mug" />
                                                    <input type="hidden" name="amount" value="14.00" />
                                                    <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="glry-w3agile-grids agileits">
                                            <div class="new-tag">
                                                <h6>20% <br> Off</h6></div>
                                            <a href="products6.html"><img src="/homes/images/p2.png" alt="img"></a>
                                            <div class="view-caption agileits-w3layouts">
                                                <h4><a href="products6.html">Teddy bear</a></h4>
                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                <h5>$20</h5>
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls_item" value="Teddy bear" />
                                                    <input type="hidden" name="amount" value="20.00" />
                                                    <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="glry-w3agile-grids agileits">
                                            <div class="new-tag">
                                                <h6>Sale</h6></div>
                                            <a href="products6.html"><img src="/homes/images/p3.png" alt="img"></a>
                                            <div class="view-caption agileits-w3layouts">
                                                <h4><a href="products6.html">Chocolates</a></h4>
                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                <h5>$60</h5>
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls_item" value="Chocolates" />
                                                    <input type="hidden" name="amount" value="60.00" />
                                                    <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="glry-w3agile-grids agileits">
                                            <a href="products6.html"><img src="/homes/images/p4.png" alt="img"></a>
                                            <div class="view-caption agileits-w3layouts">
                                                <h4><a href="products6.html">Gift Card</a></h4>
                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                <h5>$22</h5>
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls_item" value="Gift Card" />
                                                    <input type="hidden" name="amount" value="22.00" />
                                                    <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="decor" aria-labelledby="decor-tab">
                            <div class="tabcontent-grids">
                                <script>
                                $(document).ready(function() {
                                    $("#owl-demo3").owlCarousel({

                                        autoPlay: 3000, //Set AutoPlay to 3 seconds

                                        items: 4,
                                        itemsDesktop: [640, 5],
                                        itemsDesktopSmall: [414, 4],
                                        navigation: true

                                    });

                                });
                                </script>
                                <div id="owl-demo3" class="owl-carousel">
                                    <div class="item">
                                        <div class="glry-w3agile-grids agileits">
                                            <div class="new-tag">
                                                <h6>Sale</h6></div>
                                            <a href="products3.html"><img src="/homes/images/h1.png" alt="img"></a>
                                            <div class="view-caption agileits-w3layouts">
                                                <h4><a href="products3.html">Wall Clock</a></h4>
                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                <h5>$80</h5>
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls_item" value="Wall Clock" />
                                                    <input type="hidden" name="amount" value="80.00" />
                                                    <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="glry-w3agile-grids agileits">
                                            <div class="new-tag">
                                                <h6>10%<br>Off</h6></div>
                                            <a href="products3.html"><img src="/homes/images/h2.png" alt="img"></a>
                                            <div class="view-caption agileits-w3layouts">
                                                <h4><a href="products3.html">Plants & Vases</a></h4>
                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                <h5>$40</h5>
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls_item" value="Plants & Vases" />
                                                    <input type="hidden" name="amount" value="40.00" />
                                                    <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="glry-w3agile-grids agileits">
                                            <a href="products3.html"><img src="/homes/images/h3.png" alt="img"></a>
                                            <div class="view-caption agileits-w3layouts">
                                                <h4><a href="products3.html">Queen Size Bed</a></h4>
                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                <h5>$250</h5>
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls_item" value="Queen Size Bed" />
                                                    <input type="hidden" name="amount" value="250.00" />
                                                    <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="glry-w3agile-grids agileits">
                                            <a href="products3.html"><img src="/homes/images/h4.png" alt="img"></a>
                                            <div class="view-caption agileits-w3layouts">
                                                <h4><a href="products3.html">flower pot</a></h4>
                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                <h5>$30</h5>
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls_item" value="flower pot" />
                                                    <input type="hidden" name="amount" value="30.00" />
                                                    <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="glry-w3agile-grids agileits">
                                            <div class="new-tag">
                                                <h6>Sale</h6></div>
                                            <a href="products3.html"><img src="/homes/images/h1.png" alt="img"></a>
                                            <div class="view-caption agileits-w3layouts">
                                                <h4><a href="products3.html">Wall Clock</a></h4>
                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                <h5>$80</h5>
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls_item" value="Wall Clock" />
                                                    <input type="hidden" name="amount" value="80.00" />
                                                    <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="glry-w3agile-grids agileits">
                                            <div class="new-tag">
                                                <h6>10%<br>Off</h6></div>
                                            <a href="products3.html"><img src="/homes/images/h2.png" alt="img"></a>
                                            <div class="view-caption agileits-w3layouts">
                                                <h4><a href="products3.html">Plants & Vases</a></h4>
                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                <h5>$40</h5>
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls_item" value="Plants & Vases" />
                                                    <input type="hidden" name="amount" value="40.00" />
                                                    <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="glry-w3agile-grids agileits">
                                            <a href="products3.html"><img src="/homes/images/h3.png" alt="img"></a>
                                            <div class="view-caption agileits-w3layouts">
                                                <h4><a href="products3.html">Queen Size Bed</a></h4>
                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                <h5>$250</h5>
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls_item" value="Queen Size Bed" />
                                                    <input type="hidden" name="amount" value="250.00" />
                                                    <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="glry-w3agile-grids agileits">
                                            <a href="products3.html"><img src="/homes/images/h4.png" alt="img"></a>
                                            <div class="view-caption agileits-w3layouts">
                                                <h4><a href="products3.html">flower pot</a></h4>
                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                <h5>$30</h5>
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls_item" value="flower pot" />
                                                    <input type="hidden" name="amount" value="30.00" />
                                                    <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="sports" aria-labelledby="sports-tab">
                            <div class="tabcontent-grids">
                                <script>
                                $(document).ready(function() {
                                    $("#owl-demo4").owlCarousel({

                                        autoPlay: 3000, //Set AutoPlay to 3 seconds

                                        items: 4,
                                        itemsDesktop: [640, 5],
                                        itemsDesktopSmall: [414, 4],
                                        navigation: true

                                    });
                                });
                                </script>
                                <div id="owl-demo4" class="owl-carousel">
                                    <div class="item">
                                        <div class="glry-w3agile-grids agileits">
                                            <div class="new-tag">
                                                <h6>New</h6></div>
                                            <a href="products4.html"><img src="/homes/images/s1.png" alt="img"></a>
                                            <div class="view-caption agileits-w3layouts">
                                                <h4><a href="products4.html">Roller Skates</a></h4>
                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                <h5>$180</h5>
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls_item" value="Roller Skates" />
                                                    <input type="hidden" name="amount" value="180.00" />
                                                    <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="glry-w3agile-grids agileits">
                                            <a href="products4.html"><img src="/homes/images/s2.png" alt="img"></a>
                                            <div class="view-caption agileits-w3layouts">
                                                <h4><a href="products4.html">Football</a></h4>
                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                <h5>$70</h5>
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls_item" value="Football" />
                                                    <input type="hidden" name="amount" value="70.00" />
                                                    <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="glry-w3agile-grids agileits">
                                            <div class="new-tag">
                                                <h6>20% <br>Off</h6></div>
                                            <a href="products4.html"><img src="/homes/images/s3.png" alt="img"></a>
                                            <div class="view-caption agileits-w3layouts">
                                                <h4><a href="products4.html">Nylon Shuttle</a></h4>
                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                <h5>$56</h5>
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls_item" value="Nylon Shuttle" />
                                                    <input type="hidden" name="amount" value="56.00" />
                                                    <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="glry-w3agile-grids agileits">
                                            <a href="products4.html"><img src="/homes/images/s4.png" alt="img"></a>
                                            <div class="view-caption agileits-w3layouts">
                                                <h4><a href="products4.html">Cricket Kit</a></h4>
                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                <h5>$80</h5>
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls_item" value="Cricket Kit" />
                                                    <input type="hidden" name="amount" value="80.00" />
                                                    <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="glry-w3agile-grids agileits">
                                            <div class="new-tag">
                                                <h6>New</h6></div>
                                            <a href="products4.html"><img src="/homes/images/s1.png" alt="img"></a>
                                            <div class="view-caption agileits-w3layouts">
                                                <h4><a href="products4.html">Roller Skates</a></h4>
                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                <h5>$180</h5>
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls_item" value="Roller Skates" />
                                                    <input type="hidden" name="amount" value="180.00" />
                                                    <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="glry-w3agile-grids agileits">
                                            <a href="products4.html"><img src="/homes/images/s2.png" alt="img"></a>
                                            <div class="view-caption agileits-w3layouts">
                                                <h4><a href="products4.html">Football</a></h4>
                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                <h5>$70</h5>
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls_item" value="Football" />
                                                    <input type="hidden" name="amount" value="70.00" />
                                                    <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="glry-w3agile-grids agileits">
                                            <div class="new-tag">
                                                <h6>20% <br>Off</h6></div>
                                            <a href="products4.html"><img src="/homes/images/s3.png" alt="img"></a>
                                            <div class="view-caption agileits-w3layouts">
                                                <h4><a href="products4.html">Nylon Shuttle</a></h4>
                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                <h5>$56</h5>
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls_item" value="Nylon Shuttle" />
                                                    <input type="hidden" name="amount" value="56.00" />
                                                    <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="glry-w3agile-grids agileits">
                                            <a href="products4.html"><img src="/homes/images/s4.png" alt="img"></a>
                                            <div class="view-caption agileits-w3layouts">
                                                <h4><a href="products4.html">Cricket Kit</a></h4>
                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                <h5>$80</h5>
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls_item" value="Cricket Kit" />
                                                    <input type="hidden" name="amount" value="80.00" />
                                                    <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //welcome -->
    <!-- add-products -->
    <div class="add-products">
        <div class="container">
            <div class="add-products-row">
                <div class="w3ls-add-grids">
                    <a href="products1.html">
                        <h4>TOP 10 TRENDS FOR YOU FLAT <span>20%</span> OFF</h4>
                        <h6>Shop now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></h6>
                    </a>
                </div>
                <div class="w3ls-add-grids w3ls-add-grids-mdl">
                    <a href="products1.html">
                        <h4>SUNDAY SPECIAL DISCOUNT FLAT <span>40%</span> OFF</h4>
                        <h6>Shop now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></h6>
                    </a>
                </div>
                <div class="w3ls-add-grids w3ls-add-grids-mdl1">
                    <a href="products.html">
                        <h4>LATEST DESIGNS FOR YOU <span> Hurry !</span></h4>
                        <h6>Shop now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></h6>
                    </a>
                </div>
                <div class="clerfix"> </div>
            </div>
        </div>
    </div>
    <!-- //add-products -->
    <!-- coming soon -->
    <div class="soon">
        <div class="container">
            <h3>Mega Deal Of the Week</h3>
            <h4>Coming Soon Don't Miss Out</h4>
            <div id="countdown1" class="ClassyCountdownDemo"></div>
        </div>
    </div>
    <!-- //coming soon -->
    <!-- deals -->
    <div class="deals">
        <div class="container">
            <h3 class="w3ls-title">DEALS OF THE DAY </h3>
            <div class="deals-row">
                <div class="col-md-3 focus-grid">
                    <a href="products.html" class="wthree-btn">
                        <div class="focus-image"><i class="fa fa-mobile"></i></div>
                        <h4 class="clrchg">Mobiles</h4>
                    </a>
                </div>
                <div class="col-md-3 focus-grid">
                    <a href="products.html" class="wthree-btn wthree1">
                        <div class="focus-image"><i class="fa fa-laptop"></i></div>
                        <h4 class="clrchg"> Electronics & Appliances</h4>
                    </a>
                </div>
                <div class="col-md-3 focus-grid">
                    <a href="products4.html" class="wthree-btn wthree2">
                        <div class="focus-image"><i class="fa fa-wheelchair"></i></div>
                        <h4 class="clrchg">Furnitures</h4>
                    </a>
                </div>
                <div class="col-md-3 focus-grid">
                    <a href="products3.html" class="wthree-btn wthree3">
                        <div class="focus-image"><i class="fa fa-home"></i></div>
                        <h4 class="clrchg">Home Decor</h4>
                    </a>
                </div>
                <div class="col-md-2 focus-grid w3focus-grid-mdl">
                    <a href="products9.html" class="wthree-btn wthree3">
                        <div class="focus-image"><i class="fa fa-book"></i></div>
                        <h4 class="clrchg">Books & Music</h4>
                    </a>
                </div>
                <div class="col-md-2 focus-grid w3focus-grid-mdl">
                    <a href="products1.html" class="wthree-btn wthree4">
                        <div class="focus-image"><i class="fa fa-asterisk"></i></div>
                        <h4 class="clrchg">Fashion</h4>
                    </a>
                </div>
                <div class="col-md-2 focus-grid w3focus-grid-mdl">
                    <a href="products2.html" class="wthree-btn wthree2">
                        <div class="focus-image"><i class="fa fa-gamepad"></i></div>
                        <h4 class="clrchg">Kids</h4>
                    </a>
                </div>
                <div class="col-md-2 focus-grid w3focus-grid-mdl">
                    <a href="products5.html" class="wthree-btn wthree">
                        <div class="focus-image"><i class="fa fa-shopping-basket"></i></div>
                        <h4 class="clrchg">Groceries</h4>
                    </a>
                </div>
                <div class="col-md-2 focus-grid w3focus-grid-mdl">
                    <a href="products7.html" class="wthree-btn wthree5">
                        <div class="focus-image"><i class="fa fa-medkit"></i></div>
                        <h4 class="clrchg">Health</h4>
                    </a>
                </div>
                <div class="col-md-2 focus-grid w3focus-grid-mdl">
                    <a href="products8.html" class="wthree-btn wthree1">
                        <div class="focus-image"><i class="fa fa-car"></i></div>
                        <h4 class="clrchg">Automotive</h4>
                    </a>
                </div>
                <div class="col-md-3 focus-grid">
                    <a href="products5.html" class="wthree-btn wthree2">
                        <div class="focus-image"><i class="fa fa-cutlery"></i></div>
                        <h4 class="clrchg">Food</h4>
                    </a>
                </div>
                <div class="col-md-3 focus-grid">
                    <a href="products4.html" class="wthree-btn wthree5">
                        <div class="focus-image"><i class="fa fa-futbol-o"></i></div>
                        <h4 class="clrchg">Sports</h4>
                    </a>
                </div>
                <div class="col-md-3 focus-grid">
                    <a href="products2.html" class="wthree-btn wthree3">
                        <div class="focus-image"><i class="fa fa-gamepad"></i></div>
                        <h4 class="clrchg">Games & Toys</h4>
                    </a>
                </div>
                <div class="col-md-3 focus-grid">
                    <a href="products6.html" class="wthree-btn ">
                        <div class="focus-image"><i class="fa fa-gift"></i></div>
                        <h4 class="clrchg">Gifts</h4>
                    </a>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //deals -->
@endsection