<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use App\Models\Goods\Type;
use App\Models\Goods\Goods;
use App\Models\Goods\Goodspic;
use App\Models\admin\Lunbo;

use DB;


class IndexController extends Controller
{


    public function index(Request $request)
    {

    	$data = Type::getsubcate(0);
    	// $goods = Goods::with('gimg')->get();
         $res = DB::table('friend')->get();
         // dump($res);
        $poster = DB::table('poster')->get();


    	$goods = Goods::with('gimg')
    			->where('id','<', 50)
               	->orderBy(DB::raw('RAND()'))
               	->take(12)
    			->get();

          //轮播
          $Lunbo = \DB::table('lunbo')->where('status','2')->get();

          // dd($Lunbo);
        	//
        	if ($Lunbo) {
        		// $Lunbo->url = explode('|',$Lunbo->url);
            return view('home.index',[
          		'data' =>$data,
          		'goods'=>$goods,
                  'res'=>$res,
                  'poster'=>$poster,
                  'Lunbo'=>$Lunbo
          	]);
        		return view('home.index',['Lunbo'=>$Lunbo]);
        	}else{
        		$Lunbo->url=array('/homes/images/5.jpg','/homes/images/8.jpg','/homes/images/3.jpg');
        		// echo '<pre>';
        		// var_dump($Lunbo['url'][0]);die;
    			return view('home.index',['Lunbo'=>$Lunbo]);
        	}

    	// dd($goods);
    	// dump($data);

    }



    //  public function poster(Request $request)
    // {

    //      $res = DB::table('friend')->get();

    //     $poster = DB::table('poster')->get();



    //     return view('home.index',[
    //         'res'=>$res,
    //         'poster'=>$poster
    //     ]);
    // }

}
