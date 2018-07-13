<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class IndexController extends Controller
{
    /**
     * 显示后台模板
     */
    public function index()
    {
    	$res = DB::table('users')->get();

    	return view('admin.index',['res'=>$res]);
    	
    }

   
}
