<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    /**
     * 显示后台模板
     */
    public function index()
    {
    	return view('admin.index');
    	
    }

   
}
