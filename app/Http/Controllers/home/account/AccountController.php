<?php

namespace App\Http\Controllers\home\account;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\admin\Users;
use App\Models\Home\Orders;
class AccountController extends Controller
{
	/**
	 * 显示订单结算
	 */
    public function index(Request $request)
    {
        // var_dump($request->cookie('cart'));
        // dd(session()->all());

        session(['username'=>'admin']);
      // dd(session('username'));
        $user = Users::where('username',session('username'))->first();

        session(['uid'=>$user['uid']]);
        $orders = \DB::table('path')->where('uid',$user['uid'])->get();
        // dd($orders);
        $goods = \DB::table('goodscar')->where('hid', '1')->where('status','2')->get();
        // dd($goods);
    	return view('home.goodsorders.orders',['orders'=>$orders,'goods'=>$goods]);
    }

    public function ajax(Request $request)
    {
        $id = $request->input('id');
        $path = \DB::table('path')->where('pid',$id)->get();

        foreach ($path as $k => $v) {
            $paths =$v;
              session(['path'=>$paths]);
        }
        // echo jQuery.parseJSON(data);$path;


        // if ($sess) {
            // echo 1;
        // }
        // echo $paths;
    }

    public function dopath(Request $request)
    {
      $this->validate($request, [
          'pname' => 'required',
          'phone' => 'required',
          'province' => 'required',
          'city' => 'required',
          'town' => 'required',
          'detail' => 'required',
      ],[
        'pname.required'=>'收货人不能为空',
        'phone.required'=>'电话不能为空',
        'province.required'=>'请填写省',
        'city.required'=>'请填写城市',
        'town.required'=>'请填写区县',
        'detail.required'=>'请填写详细信息',

      ]);
      $path = $request->except('_token');


     // dd($path);
      // $message = Message::where('uid',$user['uid'])->first();
      // dd($path);

     try{
           $dopath = \DB::table('path')->insert($path);

            if($dopath){
                return redirect('/orders/index')->with('success','添加成功');
            }
        }catch(\Exception $e){

            return back()->with('error','添加失败');

        }
    }


    public function path(Request $request)
    {


        // $request->session()->flush('orders');
        // echo $txt;

        if ($request->has('txt')) {
            $txt = $request->input('txt');
            session(['orders.msg'=>$txt]);
        }
        session(['orders.oid'=>date("YmdHis").mt_rand(1000,9999)]);//订单号
        session(['orders.uid'=>session('uid')]);//下单人id\
        session(['orders.status'=>1]);//状态 未发货
        session(['orders.create_at'=>time()]);//下单时间
        //卖家留言
        session(['orders.name'=>session('path')->pname]);//收货人
        session(['orders.phone'=>session('path')->phone]);//收货人手机号
        session(['orders.path'=>session('path')->province.session('path')->city.session('path')->town.session('path')->detail]);//收货人

          $goods = \DB::table('goodscar')->where('hid', '1')->where('status','2')->get();
        $arr = [];

            foreach ($goods as $kk => $vv) {
                $arr[$kk]['gname'] = $vv->gname;
                $arr[$kk]['price'] = $vv->img ;
                $arr[$kk]['gid'] = $vv->gid;
                $arr[$kk]['oid'] = session('orders.oid');
                $arr[$kk]['num'] = $vv->sum;
            }

        $order = Orders::create(session('orders'));
        $data = $order->odeta()->createMany($arr);

        if ($data) {
          echo 1;
        }else{
          echo 2;
        }
        // session('detail.gid'=>session('orders.oid'));
        // session('detail.')
        // echo $res;

        \DB::table('goodscar')->where('hid', '1')->where('status','2')->delete();
    }

    /**
     * 结算成功
     */
    public function jsy()
    {

    	return view('home.goodsorders.detail');
    }


}
