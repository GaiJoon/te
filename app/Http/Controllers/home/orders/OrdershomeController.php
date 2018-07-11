<?php

namespace App\Http\Controllers\home\orders;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrdershomeController extends Controller
{
    /**
     *  显示订单
     */

    public function index()
    {
    	return view('home.homeorders.orders');
    }

    /**
     * 订单详情
     */
    public function ordersinfo()
    {
    	return view('home.homeorders.ordersinfo');
    }

    /**
     * 物流
     */

    public function logistics()
    {
    	return view('home.homeorders.logistics');
    }
}

