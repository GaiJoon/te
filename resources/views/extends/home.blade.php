<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    <script type="application/x-javascript">
    addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);

    function hideURLbar() { window.scrollTo(0, 1); }
    </script>
    <!-- Custom Theme files -->
    <link href="/homes/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="/homes/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="/homes/css/menu.css" rel="stylesheet" type="text/css" media="all" />
    <!-- menu style -->
    <link href="/homes/css/ken-burns.css" rel="stylesheet" type="text/css" media="all" />
    <!-- banner slider -->
    <link href="/homes/css/animate.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="/homes/css/owl.carousel.css" rel="stylesheet" type="text/css" media="all">
    <!-- carousel slider -->
    <!-- //Custom Theme files -->
    <!-- font-awesome icons -->
    <link href="/homes/css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome icons -->
    <!-- js -->
    <script src="/homes/js/jquery-2.2.3.min.js"></script>
    <!-- //js -->
    <!-- web-fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lovers+Quarrel' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Offside' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Tangerine:400,700' rel='stylesheet' type='text/css'>
    <!-- web-fonts -->
    <script src="/homes/js/owl.carousel.js"></script>
    <script>
    $(document).ready(function() {
        $("#owl-demo").owlCarousel({
            autoPlay: 3000, //Set AutoPlay to 3 seconds 
            items: 4,
            itemsDesktop: [640, 5],
            itemsDesktopSmall: [480, 2],
            navigation: true

        });
    });
    </script>
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
    </script>
    <!-- //smooth-scrolling-of-move-up -->
    <script src="/homes/js/bootstrap.js"></script>




    
</head>

<body>
     
    <script>
    $('#myModal88').modal('show');
    </script>
    <!-- header -->
    <div class="header">
        <div class="w3ls-header">
            <!--header-one-->
            <div class="w3ls-header-left">
                <p><a href="#"></a></p>
            </div>
            <div class="w3ls-header-right">
                <ul>
                    <li class="dropdown head-dpdn">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i>我的账户<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="login.html">登录 </a></li>
                            <li><a href="signup.html">注册</a></li>
                            <li><a href="/homeuser/index">个人中心</a></li>
                        </ul>
                    </li>
                    <li class="dropdown head-dpdn">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-percent" aria-hidden="true"></i>今日特惠<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="offers.html">现金返还优惠</a></li>
                            <li><a href="offers.html">产品折扣</a></li>
                            <li><a href="offers.html">特别优惠</a></li>
                        </ul>
                    </li>
                    <li class="dropdown head-dpdn">
                        <a href="contact.html" class="dropdown-toggle"><i class="fa fa-map-marker" aria-hidden="true"></i>商店搜索</a>
                    </li>
                    <li class="dropdown head-dpdn">
                        <a href="help.html" class="dropdown-toggle"><i class="fa fa-question-circle" aria-hidden="true"></i>帮帮我</a>
                    </li>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="header-two">
            <!-- header-two -->
            <div class="container">
                <div class="header-logo">
                    <h1><a href="/home/index"><span>S</span>集市<i>商城</i></a></h1>
                    <h6>你的商店 . 你的地方</h6>
                </div>
                <div class="header-search">
                    <form action="#" method="post">
                        <input type="search" name="Search" placeholder="你想要的货物....." required="">
                        <button type="submit" class="btn btn-default" aria-label="Left Align">
                            <i class="fa fa-search" aria-hidden="true"> </i>
                        </button>
                    </form>
                </div>
                <div class="header-cart">
                    <div class="my-account">
                        <a href="contact.html"><i class="fa fa-map-marker" aria-hidden="true"></i> 联系我们</a>
                    </div>
                    <div class="cart">
                        <form action="/cart/index" method="post" class="last">
                                {{csrf_field()}}
                            <!-- <input type="hidden" name="cmd" value="_cart" /> -->
                            <!-- <input type="hidden" name="display" value="1" /> -->
                            <button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
                        </form>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <!-- //header-two -->
@section('content')

@show

    <!-- footer-top -->
    <div class="w3agile-ftr-top">
        <div class="container">
            <div class="ftr-toprow">
                <div class="col-md-4 ftr-top-grids">
                    <div class="ftr-top-left">
                        <i class="fa fa-truck" aria-hidden="true"></i>
                    </div>
                    <div class="ftr-top-right">
                        <h4>急速送货</h4>
                        <p>全国以支持大部分地区,你只要坐在家里稍稍等待.[特殊地区可能晚到(谅解)]</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-4 ftr-top-grids">
                    <div class="ftr-top-left">
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </div>
                    <div class="ftr-top-right">
                        <h4>客户关怀</h4>
                        <p>如果您购买的商品去商品描述不符 支持七天无理由退货,保障最佳购物舒适感</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-4 ftr-top-grids">
                    <div class="ftr-top-left">
                        <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                    </div>
                    <div class="ftr-top-right">
                        <h4>高品质</h4>
                        <p> 我们竭尽全力为您提供最优质的服务 :) </p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //footer-top -->
   <div style="height:1px;"></div>
    <!-- footer -->
    <div class="footer">
        <div class="container">
            <div class="footer-info w3-agileits-info">
                <div class="col-md-4 address-left agileinfo">
                    <div class="footer-logo header-logo">
                        <h2><a href="/home/index"><span>S</span>集市 <i>市场</i></a></h2>
                        <h6>你的商店 . 你的地方</h6>
                    </div>
                    <ul>
                        <li><i class="fa fa-map-marker"></i>北京市 集市有限公司</li>
                        <li><i class="fa fa-mobile"></i> 888 888 888</li>
                        <li><i class="fa fa-phone"></i> +66 666 66  </li>
                        <li><i class="fa fa-envelope-o"></i> <a href="mailto:gaiyanhzuo@gmail.com">gaiyanzhuo@gmail.com</a></li>
                    </ul>
                </div>
                <div class="col-md-8 address-right">
                    <div class="col-md-4 footer-grids">
                        <h3>公司</h3>
                        <ul>
                            <li><a href="about.html">关于我们</a></li>
                            <li><a href="marketplace.html">市井</a></li>
                            <li><a href="values.html">核心价值</a></li>
                            <li><a href="privacy.html">隐私策略</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 footer-grids">
                        <h3>服务</h3>
                        <ul>
                            <li><a href="contact.html">联系我们</a></li>
                            <li><a href="login.html">退出账号</a></li>
                            <li><a href="faq.html">常见问题</a></li>
                            <li><a href="sitemap.html">网站地图</a></li>
                            <li><a href="login.html">订单状态</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 footer-grids">
                        <h3>支付方式</h3>
                        <ul>
                            <li><i class="fa fa-laptop" aria-hidden="true"></i> 网上银行</li>
                            <li><i class="fa fa-money" aria-hidden="true"></i> 货到付款</li>
                            <li><i class="fa fa-pie-chart" aria-hidden="true"></i>EML转换</li>
                            <li><i class="fa fa-gift" aria-hidden="true"></i> 电子礼卷</li>
                            <li><i class="fa fa-credit-card" aria-hidden="true"></i> 借记卡/信用卡</li>
                        </ul>
                    </div>

                    <div class="clearfix"></div>
                </div>
                
<!-- subscribe -->
   
           
          
             <div class="col-md-3  social-icons" style="float: right;position: relative; bottom: -38px;">
                <h4 style="color:white; ">保持联系</h4>
                <ul>
                    <li><a href="#" class="fa fa-facebook icon facebook"> </a></li>
                    <li><a href="#" class="fa fa-twitter icon twitter"> </a></li>
                    <li><a href="#" class="fa fa-google-plus icon googleplus"> </a></li>
                    <li><a href="#" class="fa fa-dribbble icon dribbble"> </a></li>
                    <li><a href="#" class="fa fa-rss icon rss"> </a></li>
                </ul>
                <ul class="apps">
                    <li>
                        <h4 style="color:white;">下载我们的应用 : </h4> </li>
                    <li><a href="#" class="fa fa-apple"></a></li>
                    <li><a href="#" class="fa fa-windows"></a></li>
                    <li><a href="#" class="fa fa-android"></a></li>
                </ul>
            </div>
            <div class="clearfix"> </div>

    <!-- //subscribe -->
    <div class="clearfix"></div>
            </div>

        </div>
    </div>
     
    <!-- //footer -->
    <div class="copy-right">
        <div class="container">
            <p>版权所有 仿冒必究&copy; 2018.公司保留所有权利  --集市商城</p>
        </div>
    </div>
    <!-- cart-js -->
    <script src="/homes/js/minicart.js"></script>
    <script>
    w3ls.render();

    w3ls.cart.on('w3sb_checkout', function(evt) {
        var items, len, i;

        if (this.subtotal() > 0) {
            items = this.items();

            for (i = 0, len = items.length; i < len; i++) {
                items[i].set('shipping', 0);
                items[i].set('shipping2', 0);
            }
        }
    });
    </script>
    <!-- //cart-js -->
    <!-- countdown.js -->
    <script src="/homes/js/jquery.knob.js"></script>
    <script src="/homes/js/jquery.throttle.js"></script>
    <script src="/homes/js/jquery.classycountdown.js"></script>
    <script>
    $(document).ready(function() {
        $('#countdown1').ClassyCountdown({
            end: '1388268325',
            now: '1387999995',
            labels: true,
            style: {
                element: "",
                textResponsive: .5,
                days: {
                    gauge: {
                        thickness: .10,
                        bgColor: "rgba(0,0,0,0)",
                        fgColor: "#1abc9c",
                        lineCap: 'round'
                    },
                    textCSS: 'font-weight:300; color:#fff;'
                },
                hours: {
                    gauge: {
                        thickness: .10,
                        bgColor: "rgba(0,0,0,0)",
                        fgColor: "#05BEF6",
                        lineCap: 'round'
                    },
                    textCSS: ' font-weight:300; color:#fff;'
                },
                minutes: {
                    gauge: {
                        thickness: .10,
                        bgColor: "rgba(0,0,0,0)",
                        fgColor: "#8e44ad",
                        lineCap: 'round'
                    },
                    textCSS: ' font-weight:300; color:#fff;'
                },
                seconds: {
                    gauge: {
                        thickness: .10,
                        bgColor: "rgba(0,0,0,0)",
                        fgColor: "#f39c12",
                        lineCap: 'round'
                    },
                    textCSS: ' font-weight:300; color:#fff;'
                }

            },
            onEndCallback: function() {
                console.log("Time out!");
            }
        });
    });
    </script>
    <!-- //countdown.js -->
    <!-- menu js aim -->
    <script src="/homes/js/jquery.menu-aim.js">
    </script>
    <script src="/homes/js/main.js"></script>
    <!-- Resource jQuery -->
    <!-- //menu js aim -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
</body>

</html>