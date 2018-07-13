<?php

namespace App\Http\Controllers\home\usershome;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersHomeController extends Controller
{
    /**
     * 显示个人中心
     */

    public function index()
    {
    	return view('home.homeuser.index');
    }

    /**
     * 个人资料
     */

    public function firstuser()
    {
    	return view('home.homeuser.firstuser');
    }

    /**
     * 地址
     */
   	public function path()
   	{
   		return view('home.homeuser.path');
   	}

   	
}
