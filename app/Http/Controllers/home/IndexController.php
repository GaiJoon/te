<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class IndexController extends Controller
{
    public function index(Request $request)
    {
    	// 获取数据
        $res = DB::table('friend')->get();

     	$poster = DB::table('poster')->get();

    	return view('home.index',['res'=>$res,'poster'=>$poster]);

    	    }
}
