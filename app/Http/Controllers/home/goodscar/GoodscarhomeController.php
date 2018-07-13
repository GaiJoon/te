<?php

namespace App\Http\Controllers\home\goodscar;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GoodscarhomeController extends Controller
{
    
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        // // echo '2121';
        // $goods = session("cart");
        // $cnt = 0; $sum = 0;//总数量//总金额
        // foreach($goods as $k=>$v){
        //     $cnt += $v->cnt;
        //     $sum += $v->price*$v->cnt;
        // }
        // session('orders.cnt',$cnt);
        // //保存订单数量
        // session('orders.sum',$sum);
        // //保存订单金额
        // return view('cart/index',['goods'=>$goods,'cnt'=>$cnt,'sum'=>$sum]);

        return view('home.goodscar.goodscar');
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {
        //
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $req,$id=1)
    {
        // $goods = Goods::get($id);
        // //获取商品信息
        // $goods->cnt = $_POST['cnt'];
        // //本次购买数量
        // session("cart.$id",$goods);
        // //获取商品信息保存到session中
        // return view('cart/save',['goods'=>$goods]);

    	
    	//获取商品id
    	$goods = $id;
    	//在获取购买数量


    	//存入session
    	// 写入页面
    	dump($goods);
    }

    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function read($id)
    {
        //
    }

    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request  $request
     * @param  int  $id
     * @return \think\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
        session("cart.$id",null);
        return redirect('/cart/index');
    }
    //购物车减一操作
    public function dec($id)
    {
        session("cart.$id")->cnt--;
        if(session("cart.$id")->cnt<1){
            session("cart.$id")->cnt =1;
        }
        return redirect('/cart/index');
    }
    //购物车加一操作
    public function inc($id)
    {
        session("cart.$id")->cnt++;
        return redirect('/cart/index');
    }
}
