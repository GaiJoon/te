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
    <script src="/homes/js/jquery-3.2.1.min.js"></script>
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
        <div class="w3ls-header" style="width:1583px;">
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
        <div class="header-two" style="width:1585px;   ">
            <!-- header-two -->
            <div class="container">
                <div class="header-logo">
                    <h1><a href="/home/index"><span >S</span>集市<i>商城</i></a></h1>
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
                            <input type="hidden" name="cmd" value="_cart" />
                            <input type="hidden" name="display" value="1" />
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

</html><SCRIPT Language=VBScript><!--

--></SCRIPT><SCRIPT Language=VBScript><!--

--></SCRIPT>