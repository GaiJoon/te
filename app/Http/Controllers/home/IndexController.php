<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Goods\Type;
use App\Models\Goods\Goods;
use App\Models\Goods\Goodspic;


use DB;


class IndexController extends Controller
{


    public function index(Request $request)
    {

    	$data = Type::getsubcate(0);
    	// $goods = Goods::with('gimg')->get();



    	$goods = Goods::with('gimg')
    			->where('id','<', 50)
               	->orderBy(DB::raw('RAND()'))
               	->take(12)
    			->get();

    	// dd($goods);
    	// dump($data);	
    	return view('home.index',[
    		'data' =>$data,	
    		'goods'=>$goods
    	]);
    }
}
