<?php

namespace App\Http\Controllers\home\account;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AccountController extends Controller
{
	/**
	 * 显示订单结算
	 */
    public function index()
    {
    	return view('home.goodsorders.orders');
    }
    /**
     * 结算成功
     */
    public function jsy()
    {
    	return view('home.goodsorders.detail');
    }
}
