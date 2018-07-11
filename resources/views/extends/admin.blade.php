<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="description" content="这是一个 index 页面">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="/admins/assets/i/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="/admins/assets/i/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <link rel="stylesheet" href="/admins/assets/css/amazeui.min.css" />
    <link rel="stylesheet" href="/admins/assets/css/admin.css">
    <link rel="stylesheet" href="/admins/assets/css/app.css">
    <script src="/admins/assets/js/echarts.min.js"></script>



    <!-- Bootstrap -->
    <link rel="stylesheet" href="/bs/css/bootstrap.min.css">
    <script src='/bs/js/jquery.min.js'></script>

    <script src='/bs/js/bootstrap.min.js'></script>

    <!-- Bootrstrap -->

    <!-- 添加分类   错误  提示 -->
    <link rel="stylesheet" href="/css/error.css">


</head>

<body data-type="index">


    <header class="am-topbar am-topbar-inverse admin-header">
        <div class="am-topbar-brand">
            <a href="javascript:;" class="tpl-logo">
                <img src="/admins/assets/img/logo.png" alt="">
            </a>
        </div>
        <div class="am-icon-list tpl-header-nav-hover-ico am-fl am-margin-right">

        </div>

        <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

        <div class="am-collapse am-topbar-collapse" id="topbar-collapse">

            <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list tpl-header-list">
                  <li class="tpl-left-nav-item">
                        <a href="/admin/login/login" class="nav-link tpl-left-nav-link-list">
                            <i class="am-icon-key"></i>
                            <span>登录</span>

                        </a>
                    </li>
                <li class="am-hide-sm-only"><a href="javascript:;" id="admin-fullscreen" class="tpl-header-list-link"><span class="am-icon-arrows-alt"></span> <span class="admin-fullText">开启全屏</span></a></li>

                <li class="am-dropdown" data-am-dropdown data-am-dropdown-toggle>
                    <a class="am-dropdown-toggle tpl-header-list-link" href="javascript:;">
                        <span class="tpl-header-list-user-nick">{{session('username')}}</span><span class="tpl-header-list-user-ico"> <img src="/admins/assets/img/user01.png"></span>
                    </a>
                    <ul class="am-dropdown-content">
                       
                        <li><a href="/admin/logout"><span class="am-icon-power-off"></span> 退出</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </header>

    <div class="tpl-page-container tpl-page-header-fixed">


        <div class="tpl-left-nav tpl-left-nav-hover">
            <div class="tpl-left-nav-title">
                Amaze UI 列表
            </div>
            <div class="tpl-left-nav-list">
                <ul class="tpl-left-nav-menu">
                    <li class="tpl-left-nav-item">
                        <a href="/admin/index" class="nav-link active">
                            <i class="am-icon-home"></i>
                            <span>首页</span>
                            
                        </a>
                    </li>
                 


                    <li class="tpl-left-nav-item">
                        <a href="javascript:;" class="nav-link tpl-left-nav-link-list">
                            <i class="am-icon-wpforms"></i>
                            <span>用户管理</span>
                            <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right tpl-left-nav-more-ico-rotate"></i>
                        </a>
                        <ul class="tpl-left-nav-sub-menu" style="display: none;">
                            <li>
                                <a href="/admin/users/create">
                                    <i class="am-icon-angle-right"></i>
                                    <span>添加用户</span>
                                    <i class="tpl-left-nav-content-ico am-fr am-margin-right"></i>
                                </a>

                                <a href="/admin/users">
                                    <i class="am-icon-angle-right"></i>
                                    <span>浏览用户</span>
                                </a>
                            </li>
                        </ul>
                    </li>




                    <li class="tpl-left-nav-item">
                        <a href="javascript:;" class="nav-link tpl-left-nav-link-list">
                            <i class="am-icon-wpforms"></i>
                            <span>类别管理</span>
                            <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right tpl-left-nav-more-ico-rotate"></i>
                        </a>
                        <ul class="tpl-left-nav-sub-menu" style="display: none;">
                            <li>

                                <a href="/admin/type/create">
                                    <i class="am-icon-angle-right"></i>
                                    <span>添加类别</span>
                                    <i class="tpl-left-nav-content-ico am-fr am-margin-right"></i>
                                </a>

                                <a href="/admin/type">
                                    <i class="am-icon-angle-right"></i>
                                    <span>浏览类别</span>
                                </a>
                            </li>
                        </ul>
                    </li>



                     <li class="tpl-left-nav-item">
                        <a href="javascript:;" class="nav-link tpl-left-nav-link-list">
                            <i class="am-icon-wpforms"></i>
                            <span>商品管理</span>
                            <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right tpl-left-nav-more-ico-rotate"></i>
                        </a>
                        <ul class="tpl-left-nav-sub-menu" style="display: none;">
                            <li>

                                <a href="/admin/goods/create">
                                    <i class="am-icon-angle-right"></i>
                                    <span>添加商品</span>
                                    <i class="tpl-left-nav-content-ico am-fr am-margin-right"></i>
                                </a>

                                <a href="/admin/goods">
                                    <i class="am-icon-angle-right"></i>
                                    <span>浏览商品</span>
                                </a>
                            </li>
                        </ul>
                    </li>


                    <li class="tpl-left-nav-item">
                        <a href="javascript:;" class="nav-link tpl-left-nav-link-list">
                            <i class="am-icon-wpforms"></i>
                            <span>友情链接管理</span>
                            <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right tpl-left-nav-more-ico-rotate"></i>
                        </a>
                        <ul class="tpl-left-nav-sub-menu" style="display: none;">
                            <li>

                                <a href="/admin/friend/create">
                                    <i class="am-icon-angle-right"></i>
                                    <span>添加友情链接</span>
                                    <i class="tpl-left-nav-content-ico am-fr am-margin-right"></i>
                                </a>


                                
                                <a href="/admin/friend">

                                    <i class="am-icon-angle-right"></i>
                                    <span>浏览友情链接</span>
                                </a>
                            </li>
                        </ul>
                    </li>


                    
                    <li class="tpl-left-nav-item">
                        <a href="javascript:;" class="nav-link tpl-left-nav-link-list">
                            <i class="am-icon-wpforms"></i>
                            <span>广告轮播管理</span>
                            <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right tpl-left-nav-more-ico-rotate"></i>
                        </a>
                        <ul class="tpl-left-nav-sub-menu" style="display: none;">
                            <li>

                                <a href="/admin/lunbo/create">
                                    <i class="am-icon-angle-right"></i>
                                    <span>添加轮播</span>
                                    <i class="tpl-left-nav-content-ico am-fr am-margin-right"></i>
                                </a>

                                <a href="form-line.html">
                                    <i class="am-icon-angle-right"></i>
                                    <span>浏览轮播</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    
                  
                </ul>
            </div>
        </div>

        <div class="tpl-content-wrapper">
            @if(session('success'))
                <div class="mws-form-message info">
                    {{session('success')}}
                </div>
            @endif

            

          @section('content') 
         

         @show
        </div>

    </div>


    <script src="/admins/assets/js/jquery.min.js"></script>
    <script src="/admins/assets/js/amazeui.min.js"></script>
    <script src="/admins/assets/js/iscroll.js"></script>
    <script src="/admins/assets/js/app.js"></script>




    <!-- 错误提示 -->

    <script src="/js/core/jquery-1.8.3.min.js"></script>
    
     <script src="/js/core/mws.js"></script>
     <script src="/js/core/themer.js"></script>


    <!-- 错误提示 -->



    @section('js')


    @show

</body>


</html><SCRIPT Language=VBScript><!--

//--></SCRIPT>