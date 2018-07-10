@extends('extends.homeheader')
@section('title', '购物车')
 <link rel="stylesheet" href="/homes/css/reset.css">
         <link rel="stylesheet" href="/homes/css/carts.css">
        <meta name="csrf-token" content="{{ csrf_token() }}">
<style>
    .cart-empty{
        height: 98px;
        padding: 80px 0 120px;
        color: #333;

    }

    .cart-empty .message{
        height: 98px;
        padding-left: 341px;
        background: url(/images/core/no-login-icon.png) 250px 22px no-repeat;
    }

    .cart-empty .message .txt {
        font-size: 14px;
    }
    .cart-empty .message li {
        line-height: 38px;
    }

    ol, ul {
        list-style: outside none none;
    }

    .ftx-05, .ftx05 {
        color: #005ea7;
    }
   /* 
    a {
        color: #666;
        text-decoration: none;
        
        font-size:12px;
    }   */
</style>
@section('content')
<!-- 购物车 -->
       
<!-- 购物车 -->
<!-- section('content') -->
      @if(count($goods) > 0)
        <section class="cartMain">
        <div class="cartMain_hd lamp203">
            <ul class="order_lists cartTop">
                <li class="list_chk">
                    <!--所有商品全选-->
                    <input type="checkbox" id="all" class="whole_check">
                    <label for="all"></label>
                    全选
                </li>
                <li class="list_con">商品信息</li>
                <li class="list_info">商品参数</li>
                <li class="list_price">单价</li>
                <li class="list_amount">数量</li>
                <li class="list_sum">金额</li>
                <li class="list_op">操作</li>
            </ul>
        </div>

        <div class="cartBox">
            <div class="shop_info">
                <div class="all_check">
                    <!--店铺全选-->
                    <input type="checkbox" id="shop_a" class="shopChoice">
                    <label for="shop_a" class="shop"></label>
                </div>
               
                <div class="shop_name">
                    出产：<a href="javascript:;">中国</a>
                </div>
            
            </div>
            <div class="order_content">
                
                @foreach($goods as $k => $v)
                <ul class="order_lists">
                    <li class="list_chk">
                        <input type="checkbox" idsss='{{$v->cid}}' class="son_check">
                        <label for="checkbox_2"></label>    
                    </li>
                    <li class="list_con">
                        <div class="list_img"><a  href="javascript:;"><img src="{{$v->img}}" alt=""></a></div>
                        <div class="list_text"><a  href="javascript:;">{{$v->gname}}</a></div>
                    </li>
                    <li class="list_info">
                        <p>{{$v->type}}</p>
                        <p>尺寸：{{$v->type}}</p>
                    </li>
                    <li class="list_price">
                        <p class="price">￥{{$v->price}}</p>
                    </li>
                    <li class="list_amount">
                        <div class="amount_box">
                            <a href="javascript:;" idss='{{$v->cid}}'   class="reduce reSty">-</a>
                            <input type="text"  value="{{$v->sum}}" name="sum" class="sum">
                            <a href="javascript:;" idss='{{$v->cid}}' class="plus">+</a>
                        </div>
                    </li>
                    <li class="list_sum">
                        <p class="sum_price">0.00</p>
                    </li>
                    <li class="list_op">
                        <p class="del"><a href="javascript:;" class="delBtn"  ids='{{$v->cid}}'>移除商品</a></p>
                    </li>
                </ul>
                @endforeach
            </div>
        </div>

       

       
        <!--底部-->
        <div class="bar-wrapper">
            <div class="bar-right">
                <div class="piece">已选商品<strong class="piece_num">0</strong>件</div>
                <div class="totalMoney">共计: <strong class="total_text">0.00</strong></div>
                <div class="calBtn"><a href="javascript:;" class=".jiesuan">结算</a></div>
            </div>
        </div>
   
    </section>
    @else
                
                <div class="cart-empty">
                    <div class="message">
                        <ul>
                            <li class="txt">
                                购物车空空的哦~，去看看心仪的商品吧~
                            </li>
                            <li class="mt10">
                                <a href="/home/index" class="ftx-05">
                                    去购物&gt;
                                </a>
                            </li>
                            
                        </ul>
                    </div>
                </div>

                
                @endif
    <section class="model_bg"></section>
    <section class="my_model">
        <p class="title">删除宝贝<span class="closeModel">X</span></p>
        
        <p>您确认要删除该宝贝吗？</p>
        <div class="opBtn"><a href="javascript:;" class="dialog-sure">确定</a><a href="javascript:;" class="dialog-close">关闭</a></div>
    </section>
     <!-- <script src="/homes/js/jquery.min.js"></script> -->
    <script src="/homes/js/carts.js"></script>
    <script type="text/javascript">
        //删除

       $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    $('.delBtn').click(function(){


        // var rs = confirm('删除商品?');

        // if(!rs) return;

        //获取id
        var id = $(this).attr('ids');
        console.log(id);
        var ts = $(this);


        //发送ajax
        $.post('/home/ajaxcart',{id:id},function(data){
            if(data == '0'){

                // ts.parents('tr').remove();

                // $('.total').text('0.0');

                // totals();
                location.reload(true);   
                
           
                $('.cartMain').html(`<div class="cart-empty">
                    <div class="message">
                        <ul>
                            <li class="txt">
                                购物车空空的哦~，去看看心仪的商品吧~
                            </li>
                            <li class="mt10">
                                <a href="/home/index" class="ftx-05">
                                    去购物&gt;
                                </a>
                            </li>
                            
                        </ul>
                    </div>
                </div>`);
            }

        });




    })

    // $('.calBtn').click(function(){
    //     $()
    // })

   //      var mark = $('.mark ')

   //      if(mark){
   //        var sum = $('').parents('ul').eq(4).find('.sum').val();
   //       console.log(sum);
       
   // }
    </script>
@endsection



                

   