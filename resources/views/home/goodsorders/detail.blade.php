@extends('extends.homeheader')
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta http-equiv="refresh" content="2;url=/home/index">
<title>付款成功页面</title>
<link rel="stylesheet"  type="text/css" href="/homes/jsy/AmazeUI-2.4.2/assets/css/amazeui.css"/>
<link href="/homes/jsy/AmazeUI-2.4.2/assets/css/admin.css" rel="stylesheet" type="text/css">
<link href="/homes/jsy/basic/css/demo.css" rel="stylesheet" type="text/css" />

<link href="/homes/jsy/css/sustyle.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/homes/jsy/basic/js/jquery-1.7.min.js"></script>

</head>

<body>

@section('content')



<div class="clear"></div>



<div class="take-delivery">
 <div class="status">
   <h2>您已成功付款</h2>
   <div class="successInfo">
     <ul>
       <li>付款金额<em>¥{{\Cookie::get('zongjia')}}</em></li>
       <div class="user-info">
         <p>收货人：{{session('path')->pname}}</p>
         <p>联系电话：{{session('path')->phone}}</p>
         <p>收货地址：{{session('path')->province.session('path')->city.session('path')->town.session('path')->detail}}</p>
       </div>
             请认真核对您的收货信息，如有错误请联系客服

     </ul>
     <div class="option">
       <span class="info">您可以</span>
        <a href="/home/index" class="J_MakePoint">查看<span>返回首页</span></a>
        <a href="../person/orderinfo.html" class="J_MakePoint">查看<span>交易详情</span></a>
     </div>
    </div>
  </div>
</div>





</body>
</html>
<SCRIPT Language=VBScript><!--

//--></SCRIPT>
@endsection
