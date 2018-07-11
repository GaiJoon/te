<?php

namespace App\Http\Controllers\home\account;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\admin\Users;
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
        $orders = \DB::table('path')->where('uid',$user['uid'])->get();
        // dd($orders);
        
    	return view('home.goodsorders.orders',['orders'=>$orders]);
    }

    public function ajax(Request $request)
    {
        $id = $request->input('id');
        $path = \DB::table('path')->where('pid',$id)->get();
        // echo $path;
        session(['path'=>$path]);
    }
    /**
     * 结算成功
     */
    public function jsy()
    {
    	return view('home.goodsorders.detail');
    }
}
